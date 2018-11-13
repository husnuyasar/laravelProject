<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PHP2WSDL;
use Illuminate\Support\Facades\Storage;

class CreateServiceWSDL extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'icc:createwsdl {wsdlname : olusturulacak wsdl dosyasinin adi} {classpath : wsdl ciktisi olusturulacak classin namespace pathi. Path yazilirken iki tane backslash kullanin [Sample\\\\Class\\\\Path] } {uri : webservicein yayinlanacagi endpoint urli}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "SOAP Webservice icin kullanilacak classin wsdl dokumanini olusturur \r\n ve public klasoru altina kaydeder";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $filename = $this->argument('wsdlname');
        $class = $this->argument('classpath');
        $serviceURI = $this->argument('uri');
        
        $this->warn("Starting creation of WSDL document\r\n");
        
        $this->info("Target class:");
        $this->warn($class."\r\n");
        
        $this->info("Target URI: ");
        $this->warn($serviceURI);
        
        $wsdlGenerator = new PHP2WSDL\PHPClass2WSDL($class, $serviceURI);
        // Generate the WSDL from the class adding only the public methods that have @soap annotation.
        $wsdlGenerator->generateWSDL(true);
        // Dump as string
        $wsdlXML = $wsdlGenerator->dump();
        // And save as file
        Storage::disk('wsdl')->put($filename, $wsdlXML);
        
        $this->info('');
        $this->info("WSDL file {$filename} created succesfully");
    }
}
