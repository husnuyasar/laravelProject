<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateWSDLDocuments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'icc:createwsdldocuments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tanimlanan butun servis dokumanlarini yeniden olusturur';

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
        $this->call('icc:createwsdl', [
            'wsdlname' => 'messagingservice.wsdl', 
            'classpath' => 'Modules\\Messaging\\Http\\Controllers\\SOAP\\Server\\MessagingSOAPServerController',
            'uri' => url('messaging/webservice')
        ]);
        
        // messagingservice.wsdl Modules\\Messaging\\Http\\Controllers\\SOAP\\Server\\MessagingSOAPServerController http://testv2.iccdenetim.com/messaging/webservice
    }
}
