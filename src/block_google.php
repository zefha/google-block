<?php
class block_google extends block_base {
    public function init() {
        $this->title = get_string('google', 'block_google');
    }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.

 public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }

    $this->content         =  new stdClass;


    //The URL with parameters / query string.
    $url = 'https://www.googleapis.com/customsearch/v1?key=[API KEY]&cx=[Search Engine ID]&q=Moodle+Blocks';

    //Once again, we use file_get_contents to GET the URL in question.
    $contents = file_get_contents($url);

   //If $contents is not a boolean FALSE value.
   if($contents !== false){
        //Print out the contents.
        $this->content->text   =  $contents;
   }

 
    return $this->content;
}

}
