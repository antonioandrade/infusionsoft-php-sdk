<?php
/**
 * @property String Id
 * @property String OpportunityTitle
 * @property String ContactID
 * @property String AffiliateId
 * @property String UserID
 * @property String StageID
 * @property String StatusID
 * @property String Leadsource
 * @property String Objection
 * @property String ProjectedRevenueLow
 * @property String ProjectedRevenueHigh
 * @property String OpportunityNotes
 * @property String DateCreated
 * @property String LastUpdated
 * @property String LastUpdatedBy
 * @property String CreatedBy
 */
class Infusionsoft_Generated_LinkedContactType extends Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'TypeName', 'MaxLinked');
    
    
    public function __construct($id = null, $app = null){    	    	
    	parent::__construct('LinkedContactType', $id, $app);    	    	
    }
    
    public function getFields(){
		return self::$tableFields;	
	}
	
	public function addCustomField($name){
        if (!in_array($name, self::$tableFields)){
            self::$tableFields[] = $name;
        }
	}

    public function addCustomFields($fields){
        foreach($fields as $name){
            self::addCustomField($name);
        }
	}

    public function removeField($fieldName){
        $fieldIndex = array_search($fieldName, self::$tableFields);
        if($fieldIndex !== false){
            unset(self::$tableFields[$fieldIndex]);
            self::$tableFields = array_values(self::$tableFields);
        }
    }

    public function fieldExists($field){
        return (array_search($field, self::$tableFields) !== false);
    }
}
