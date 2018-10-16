class GumballMachine{
    private $gumballs;
//Sample code
    // Get the amount of gumballs still in the maching
    public function getGumballs(){
        return $this->gumballs;
    }

    //set the amount of gumballs in the machine
    public function setGumballs($amount){
        $this->gumballs= $amount;
    }

    //The user turns the wheel, machine dispenses gumball
    public function turnWheel(){
        $this->setGumballs($this->getGumballs());
    }
}
