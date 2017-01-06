<?php

namespace App\Http\Controllers;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Crypt;
use Request;

use App\Http\Requests;
use App\Agent;
use App\State;
use XMLWriter;
use File;

class ProducerController extends Controller
{
	//show the hallmark form
    public function showform(){
    	return view('forms.producerform');
    }
    
    //
    public function createxml(){

    	$input=Request::all();

		$pfname=$input['pf_name'];
		$pfn=array_filter($pfname);

		$plname=$input['pl_name'];
		$pln=array_filter($plname);

		$pbirthday=$input['p_birthday'];
		$pdob=array_filter($pbirthday);

		$psecurity=$input['p_security_no'];
		$psec=array_filter($psecurity);

		//separate the license number
		$license_number=$input['p_licence_no'];
		$arrcount=count($input['pf_name']);

	    $xml = new XMLWriter();;
	    $xml->openMemory();
	    $xml->startDocument();
	    	$xml->startElement('Agent');
	        	$xml->startElement('Agentinfo');
		        	$xml->writeElement('AgencyName',$input['agency_name']);
		        	$xml->writeElement('AgencyCode',$input['agency_code']);

			        for($x=0;$x<$arrcount;$x++) {
			        	$xml->startElement('Producer');
				        $xml->writeAttribute('ProducerId',$x+1);
				        $xml->writeElement('FirstName',$pfn[$x]);
				        $xml->writeElement('LastName',$pln[$x]);
				        $xml->writeElement('DOB',$pdob[$x]);
				        $xml->writeElement('SSN',$psec[$x]);
				  
				   	 	$xml->startElement('Status');
						
				   	 	$licenseproducer=array_filter($license_number[$x]);

						foreach ($licenseproducer as $key => $states) {
							
							$xml->startElement('LicenseState');
							$xml->writeAttribute('id',$key);
							$xml->writeElement('LicenseNumber',$states);
				       		$xml->endElement();
						}
						$xml->endElement();
					$xml->endElement();
					}
		 	   	$xml->endElement();
	  		$xml->endElement();
	    $xml->endDocument();

	    $content = $xml->outputMemory();
	    $xml = null;
	    $result=response($content)->header('Content-Type', 'xml');

	    File::put(storage_path('xml').'/'.$input['agency_name'].'.xml', $content);

	    return redirect('home');
	    
    }
}
