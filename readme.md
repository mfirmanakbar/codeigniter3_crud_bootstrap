
# Codeigniter V.3 CRUD Bootstrap CSS

<p align="center">
  <img src="https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/blob/master/screenshots/Screen%20Shot%202017-01-23%20at%204.29.17%20PM.png" width="50%" />
</p>

### What is CodeIgniter? [Click Here](https://www.codeigniter.com/). 
### Tutorial 
1. Install & Config Part-1
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
    $config['encryption_key'] = 'bkavahsalhciyGT67ats78rfcD^ASo'; //Change encryption_key with whatever you want
    ```
        
  * You can download database from [here] (https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/tree/master/database) and change code  
  * Open **application/config/database.php** and change this with yours
  
    ```
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'tem_all',
    ```
  * Set template, download [here] (https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/blob/master/application/libraries/Template.php) and save it to   **/application/libraries/Template.php**


2. Part-2
  * Rename file and class Controller *Welcome.php* **application/controller/Welcome.php** to *Home.php*
  * Don't forget rename the **class name** too
    ```
    <?php
     defined('BASEPATH') OR exit('No direct script access allowed');
     class Home extends CI_Controller {
      //source code
     }
    ```
  
  * Open **application/config/routes.php** and change *default_controller* to : 
    ```
    $route['default_controller'] = 'home';
    ```
  * Change view name *welcome_message* to *page_home* in Controller Home
    ```
    $this->load->view('page_home');
    ```
  
  * Rename *welcome_message.php* in **application/views/welcome_message.php** to *page_home.php*
  
3. Part-3
  * Copy and Paste folder assets [(download here)](https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/tree/master/assets) to your project. This a way to set the bootraps CSS in this project.
  * Remember! the different from site_url (return last file name) and base_url (only return folder path), so to link the bootstrap CSS from folder assets just use base_url();
  * Copy and Paste *pagination.php* into **application/config/pagination.php** [Here the source code](https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/blob/master/application/config/pagination.php)
  *	Create a new model file example with name *Model_home.php* into **application/models** [Source Code](https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/blob/master/application/models/Model_home.php)  
  *	Copy and Paste folder *fpdf181* into **application/fpdf181** [Download Here](https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/tree/master/application/fpdf181)
  * Create a new file with name *Fpdf_gen.php* in **application/library** [Source Code](https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/tree/master/application/fpdf181)
  * Finally the complate Page view and controller:
    - [Controller Home.php](https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/blob/master/application/controllers/Home.php)
    - [Page view page_home.php](https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/blob/master/application/views/page_home.php)
    - [Page view page_excel.php](https://github.com/firmanprogrammer/codeigniter3_crud_bootstrap/blob/master/application/views/page_excel.php)

