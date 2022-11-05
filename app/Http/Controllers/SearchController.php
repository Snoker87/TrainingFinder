<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

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
        foreach($results as $result){
            var_dump($result->entity_group);
            var_dump($result->word);
        }
        dd("just hope it's work !");



    }
}
