<?php
//Interface

interface USB 
{
	function connect();
    function disconnect();
    function transfer();
}

class Laptop implements USB
{
	function connect() {
		//Do Something
	}

    function disconnect() {
		//Do Something
	}

    function transfer() {
		//Do Something
	}
}

/*

Not Allowed: class MobilePhone extends Phone, Computer, Camera

class MobilePhone extends Computer implements Phone, Camera, FM, 

...*/