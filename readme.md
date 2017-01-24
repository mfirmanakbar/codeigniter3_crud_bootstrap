
# Codeigniter V.3 CRUD Bootstrap CSS

<img src="https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/blob/master/screenshots/Screen%20Shot%202017-01-23%20at%204.29.17%20PM.png" width="50%" ></img>

### What is CodeIgniter? [Click Here](https://www.codeigniter.com/). 
### Tutorial 
1. Install & Config
  * Download CodeIgniter V.3 [Click Here](https://www.codeigniter.com/).
  * Create a file *.htaccess* in your project folder **CI/YourProject**. [Source Code .htaccess](https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/blob/master/.htaccess)
  * Create a file *Template.php* in **application/libraries**. [Source Code Template.php](https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/blob/master/application/libraries/Template.php). 
  * Open **application/config/autoload.php** and Change autoload like this:
    ```
    $autoload['libraries'] = array('session','database','Template','form_validation','encrypt');
    ```
    
    ```
    $autoload['helper'] = array('url','file','form');
    ```
    
  * Open **application/config/config.php** and Change config like this:
    ```
    //begin - this for base_url
    $root = "http://".$_SERVER['HTTP_HOST']; 
    $root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
    $config['base_url']    = "$root";
    //end
    ```
    
    ```
    $config['index_page'] = '';
    ```
    
    ```
    $config['url_suffix'] = '.html';
    ```
    
    ```
    $config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
    ```
    
    ```
    $config['encryption_key'] = 'bkavahs%$^#54sfa5^RVD^ASo'; //Change encryption_key with whatever you want
    ```
        
  *

