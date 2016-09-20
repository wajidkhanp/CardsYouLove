<?php

/**
 * Description of CardCatSave
 *
 * @author wpatan
 */
class CardCatSave {

    public function CardCatSave($grocery, $tbill, $restuarant, $gas, $others) {

        $this->grocery = $grocery;
        $this->tbill = $tbill;
        $this->restuarant = $restuarant;
        $this->gas = $gas;
        $this->others = $others;
       
    }

    function getCitiDCAnnualSaving() {

        return (($this->grocery * 2) / 100 + ($this->tbill * 2) / 100 + ($this->restuarant * 2) / 100 + ($this->gas * 2) / 100 + ($this->others * 2) / 100) * 12;
    }

    function getBlueCashPrefAnnaulSavings() {

        $BCPGrocery = $this->grocery;
        $BCPGroceryAS = $BCPGrocery * 12;

        if ($BCPGroceryAS >= 6000) {
            $BCPGrocery = (($BCPGroceryAS - 6000) * 1 / 100) + (6000 * 6 / 100);
        } else {
            $BCPGrocery = $BCPGroceryAS * 6 / 100;
        }
        
        return ($BCPGrocery + (($this->tbill * 1) / 100 + ($this->restuarant * 1) / 100 + ($this->gas * 3) / 100 + ($this->others * 1) / 100 )* 12)-75;
    }
    
    function getPenfedVisaPlatAnnualSaving() {

        return (($this->grocery * 3) / 100 + ($this->tbill * 1) / 100 + ($this->restuarant * 1) / 100 + ($this->gas * 5) / 100 + ($this->others * 1) / 100) * 12;
    }

    function getCapitaloneQSAnnualSaving() {

        return (($this->grocery * 1.5) / 100 + ($this->tbill * 1.5) / 100 + ($this->restuarant * 1.5) / 100 + ($this->gas * 1.5) / 100 + ($this->others * 1.5) / 100) * 12;
    }
    
    function getBOACashRewardsAnnualSaving() {

        return (($this->grocery * 2) / 100 + ($this->tbill * 1) / 100 + ($this->restuarant * 1) / 100 + ($this->gas * 3) / 100 + ($this->others * 1) / 100) * 12;
    }
    function getUSbankCashAnnualSaving() {

        return (($this->grocery * 2) / 100 + ($this->tbill * 5) / 100 + ($this->restuarant * 1) / 100 + ($this->gas * 2) / 100 + ($this->others * 1) / 100) * 12;
    }
    
    function getBarclayCashForwardAnnualSaving() {

        $annualsavings=(($this->grocery * 1.5) / 100 + ($this->tbill * 1.5) / 100 + ($this->restuarant * 1.5) / 100 + ($this->gas * 1.5) / 100 + ($this->others * 1.5) / 100) * 12;
        $additionalsavinsg = $annualsavings *5/100;
        
        return   $annualsavings + $additionalsavinsg;
    }
    
    function getBlueCashAnnualSaving() {

        return (($this->grocery * 2) / 100 + ($this->tbill * 1) / 100 + ($this->restuarant * 1) / 100 + ($this->gas * 3) / 100 + ($this->others * 1) / 100) * 12;
    }
    
    function getDiscoverChromeAnnualSaving() {

        return (($this->grocery * 1) / 100 + ($this->tbill * 1) / 100 + ($this->restuarant * 2) / 100 + ($this->gas * 2) / 100 + ($this->others * 1) / 100) * 12;
    }
}
?>