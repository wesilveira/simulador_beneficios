<?php
//classe de objetos Lead
class Lead{
    private $title;
    private $name;
    private $phone;
    private $email;
    private $comments;
    private $assigned_by_id;
    private $created_by_id;
    private $source_id; 
    private $utm_source;
    private $utm_medium;
    private $utm_campaign;
    private $utm_content;
    private $utm_term;
    private $operacao;

    public function __construct($title,$name,$phone,$email,$comments,$assigned_by_id,$created_by_id,$source_id,$utm_source,$utm_medium,$utm_campaign,$utm_content,$utm_term,$operacao){
      $this->title = $title;
      $this->name = $name;
      $this->phone = $phone;
      $this->email = $email;
      $this->comments = $comments;
      $this->assigned_by_id = $assigned_by_id;
      $this->created_by_id = $created_by_id;
      $this->source_id = $source_id;
      $this->utm_source = $utm_source;
      $this->utm_medium = $utm_medium;
      $this->utm_campaign = $utm_campaign;
      $this->utm_content = $utm_content;
      $this->utm_term = $utm_term;
      $this->operacao = $operacao;

    }

    public function geraLead(){

        //created payload mount LEAD
        $prepareToSend = '{
            "fields": {
                "TITLE": "'.$this->name.'",
                "NAME": "'.$this->name.'",
                "PHONE": [
                    {
                        "VALUE": "'.$this->phone.'",
                        "VALUE_TYPE": "WORK"
                    }
                ],
                "EMAIL": [
                    {
                        "VALUE": "'.$this->email.'",
                        "VALUE_TYPE": "WORK"
                    }
                ],
                "OPENED": "Y",
                "COMMENTS": "'.$this->comments.'",
                "TYPE_ID": "CLIENT",
                "ASSIGNED_BY_ID": "'.$this->assigned_by_id.'",
                "CREATED_BY_ID": "'.$this->created_by_id.'",
                "SOURCE_ID": "'.$this->source_id.'",
                "UTM_SOURCE": "'.$this->utm_source.'",
                "UTM_MEDIUM": "'.$this->utm_medium.'",
                "UTM_CAMPAIGN": "'.$this->utm_campaign.'",
                "UTM_CONTENT": "'.$this->utm_content.'",
                "UTM_TERM": "'.$this->utm_term.'",
                "UF_CRM_1606913170965": "'.$this->operacao.'"
            }
        }';

        $sendToCRM = curl_crm_method("crm.lead.add",$prepareToSend);
        $returnToCRM = json_decode($sendToCRM,true);

        if(isset($returnToCRM["result"]) and ($returnToCRM["result"] != "" or !empty($returnToCRM["result"])))
        {
          $lead_id = $returnToCRM["result"];
          return $lead_id;
        }else{
          return null;
        }
    }

    public function  getTitle(){
      return $this->title;

    }
    public function  getName(){
      return $this->name;
    }
    public function  getPhone(){
      return $this->phone;
    }
    public function  getEmail(){
      return $this->email;
    }
    public function  getComments(){
      return $this->comments;
    }
    public function  getAssignedByID(){
      return $this->assigned_by_id;
    }
    public function  getCreatedByID(){
      return $this->created_by_id;
    }
    public function  getSourceID(){
      return $this->source_id;
    }
    public function  getUtmSource(){
      return $this->utm_source;
    }
    public function  getUtmMedium(){
      return $this->utm_medium;
    }
    public function  getUtmCampaign(){
      return $this->utm_campaign;
    }
    public function  getUtmContent(){
      return $this->utm_content;
    }
    public function  getUtmTerm(){
      return $this->$utm_term;
    }
    public function  getOperacao(){
      return $this->operacao;
    }
    public function  setTitle($title){
      $this->title = $title;
    }
    public function  setName($name){
      $this->name = $name;
    }
    public function  setPhone($phone){
      $this->phone = $phone;
    }
    public function  setEmail($email){
      $this->email = $email;
    }
    public function  setComments($comments){
      $this->comments = $comments;
    }
    public function  setAssignedByID($assigned_by_id){
      $this->assigned_by_id = $assigned_by_id;
    }
    public function  setCreatedByID($created_by_id){
      $this->created_by_id = $created_by_id;
    }
    public function  setSourceID($source_id){
      $this->source_id = $source_id;
    }
    public function  setUtmSource($utm_source){
      $this->utm_source = $utm_source;
    }
    public function  setUtmMedium($utm_medium){
      $this->utm_medium = $utm_medium;
    }
    public function  setUtmCampaign($utm_campaign){
      $this->utm_campaign = $utm_campaign;
    }
    public function  setUtmContent($utm_content){
      $this->utm_content = $utm_content;
    }
    public function  setUtmTerm($utm_term){
      $this->utm_term = $utm_term;      
    }
    public function  setOperacao($operacao){
      $this->operacao = $operacao;      
    }
}

function curl_crm_method($method,$payload){
  include "config/integration_connect.php";
  // API URL
  $url = $endpoint.$method;

  // Create a new cURL resource
  $ch = curl_init($url);

  // Attach encoded JSON string to the POST fields
  curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

  // Set the content type to application/json
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

  // Return response instead of outputting
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  // Execute the POST request
  $result = curl_exec($ch);

  // Close cURL resource
  curl_close($ch);
  
  //return result
  return $result;
}



?>