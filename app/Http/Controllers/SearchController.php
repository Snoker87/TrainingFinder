<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\DB;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Models\Opportunity;

class SearchController extends Controller
{
    public function proccess(Request $request) {
        $tr = new GoogleTranslate(); 
        $arguments    = $request->text;
        $full_path_to_python_script = '../scripts/data.py';
        $command      = "python3 $full_path_to_python_script \"{$arguments}\"";
        $output       = shell_exec($command);
        $output = json_encode($output);
        logger($output);
        $output = str_replace("'",'"',$output);
        $output = substr($output, 1, -1);
        $output = substr($output, 0, -2);
        $results = json_decode($output);
        logger($results);
        $org = null;
        $loc = null;
        $opportunities = null;
        $online = null;
        if (str_contains($request, 'online')) { 
            $online = true;
        }
        if ($results == null)
        return view('content.home.home',compact('opportunities'));

        foreach($results as $result){
            if($result->entity_group == "ORG")
                $org = $result->word;
            else if($result->entity_group == "LOC") 
            {
                $loc = $tr->setSource()->setTarget('en')->translate($result->word);
            }
        }
        if($org != null && $loc == null){
            $company = Company::where('name', 'LIKE', '%' . $org . '%')->first();
            if($company == null)
            return;
            $opportunities = $company->opportunities;
            return view('content.home.home',compact('opportunities'));
        }
        if($loc != null && $org == null){
            $opportunities = Opportunity::where('city', 'LIKE', '%' . $loc . '%')->get();
            return view('content.home.home',compact('opportunities'));
        }
        if($loc != null && $org != null){
            $opportunities = Opportunity::
            where('city', 'LIKE', '%' . $loc . '%')
            ->join('companies', 'companies.id', '=', 'opportunities.company_id')
            ->where('name', 'LIKE', '%' . $org . '%')
            ->get();
            return view('content.home.home',compact('opportunities'));
        }
        
            // Double where.
            // $company = DB::table('companies')
            //     ->where('name', 'LIKE', '%' . $org . '%')
            //     ->where('hq', 'LIKE', '%' . $loc . '%')
            //     ->first();
            // Inner join for DB 
            // $opportunities = DB::table('opportunities')
            // ->where('city', 'LIKE', '%' . $loc . '%')
            // ->join('companies', 'companies.id', '=', 'opportunities.company_id')
            // ->where('name', 'LIKE', '%' . $org . '%')
            // ->get();

    }
}
