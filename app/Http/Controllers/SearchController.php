<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\DB;
use app\Models\Opportunity;
use Stichoza\GoogleTranslate\GoogleTranslate;

class SearchController extends Controller
{
    public function proccess(Request $request) {

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
        foreach($results as $result){
            if($result->entity_group == "ORG")
                $org = $result->word;
            else if($result->entity_group == "LOC")
                $loc = $result->word;
        }
        if($org != null){
            $company = Company::where('name', 'LIKE', '%' . $org . '%')->first();
            $opportunities = $company->opportunities;
            return view('content.home.home',compact('opportunities'));
        }
        
        // dd("just hope it's work !".$org);



    }
}
