class SomeClass  
{  
    public function doSomething()  
    {  
          
        $socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);  
        if ($socket === false) {  
            throw new \Exception('Ooops!');  
        }  
        socket_close($socket);  
        return true;  
    }  
  
    public function __construct()  
    {  
    }  
}  