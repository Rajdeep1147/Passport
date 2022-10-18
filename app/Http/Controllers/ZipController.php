<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use ZipArchive;
use Response;

class ZipController extends Controller
{
    public function downloadZip()
    {
        $zip = new ZipArchive;
        $filename = "employeeData.zip";
        
        if($zip->open(public_path($filename),ZipArchive::CREATE)=== TRUE)
        {
            $files = File::files(public_path('document'));

            foreach($files as $key =>$value)
            {
                $nameofFile = basename($value);
                $zip->addFile($value,$nameofFile);
                
            }
            $zip->close();
        }
        return response()->download(public_path($filename));
    }


    public function downloadSampleFile()
    {
        $path =  public_path("Sample/sample.csv");
        $name='sample-'.date('Y-m-d');
        if("sample.csv"){
            $path =  public_path("Sample/sample.csv");
            $name='sample-'.date('Y-m-d');    
        }
        $path =  public_path("Sample/sample.csv");
        $name = date('Y-m-d').'-sample.csv';
        return  Response::download($path,$name);
    }

    public function checkAndCreateFile()
    {
        $filename ='sample.csv';

        if (!File::exists(public_path()."/Sample")) {
            File::makeDirectory(public_path() . "/Sample");
            $filename =  public_path("Sample/".$filename);
            $handle = fopen($filename, 'w');
            fputcsv($handle, [
                "num",
                "domain_name",
                "query_time",
                "create_date",
                "update_date",
                "expiry_date",
                
                "domain_registrar_id",
                "domain_registrar_name",
                "domain_registrar_url",
                
                "registrant_name",
                "registrant_company",
                "registrant_address",
                "registrant_city",
                "registrant_state",
                "registrant_zip",
                "registrant_country",
                "registrant_email",
                "registrant_phone",
                "registrant_fax",
                
                "administrative_name",
                "administrative_company",
                "administrative_address",
                "administrative_city",
                "administrative_state",
                "administrative_zip",
                "administrative_country",
                "administrative_email",
                "administrative_phone",
                "administrative_fax",
                
                "technical_name",
                "technical_company",
                "technical_address",
                "technical_city",
                "technical_state",
                "technical_zip",
                "technical_country",
                "technical_email",
                "technical_phone",
                "technical_fax",
                
                "billing_name",
                "billing_company",
                "billing_address",
                "billing_city",
                "billing_state",
                "billing_zip",
                "billing_country",
                "billing_email",
                "billing_phone",
                "billing_fax",
                
                "name_server_1",
                "name_server_2",
                "name_server_3",
                "name_server_4",
              
                
                "domain_status_1",
                "domain_status_2",
                "domain_status_3",
                "domain_status_4",
                
            ]);
            fclose($handle);
           
            return true; 
        }
    }
}
