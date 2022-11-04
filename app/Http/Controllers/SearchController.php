<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class SearchController extends Controller
{
    public function proccess(Request $request) {
        // $process = new Process(['python', '../scripts/search.py'],env: [
        //     'SYSTEMROOT' => getenv('SYSTEMROOT'),
        //     'PATH' => getenv("PATH")
        //   ]);
        // $process->run();
        // // executes after the command finishes
        // if (!$process->isSuccessful()) {
        // throw new ProcessFailedException($process);
        // }
        $arguments    = $request->text;
        $full_path_to_python_script = '../scripts/data.py';
        $command      = "python $full_path_to_python_script \"{$arguments}\"";
        $output       = shell_exec($command);
        $output = json_encode($output);
        logger($output);
        // $arr = array("[" => "", "]" => "");
        // $output = strtr($output,$arr);
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

        // $json = '{"foo-bar": 12345}';
        // $obj = json_decode($json);
        // dd($obj->{'foo-bar'}); // 12345
        // $string = '{"entity_group": 
        //     "LOC",
        //     "score": 0.979547917842865, 
        //     "word": "jeddah", "start": 19, "end": 25}';
        // $object = json_decode($string);
        // dd($object->start);

    }
}
