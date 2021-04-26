<?php
class Layout
{
    private $root;
    // protected $getContent;
   

    public static function getContent($getContent)
    {
        $root = $getContent;
        if (file_exists($root)) {
            $contents =  file_get_contents($root);
            eval(' ?>' . $contents . '<?php ');
        } else {
            return false;
        }
    }

    public static function TopHeader()
    {
        $root = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..').'/layouts/metasLink.php';
        if (file_exists($root)) {
            $contents = file_get_contents($root);
            eval(' ?>' . $contents . '<?php ');
        } else {
            echo 'Algo salió mal';
        }
    }

    public static function HeroPage()
    {
        $root = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..').'/PageHeader.php';
        $respuesta = self::getContent($root) ;
        if ($respuesta != false) {
            return $respuesta;
        } else {
            echo '<b>Algo salió mal!<b>';
        }
    }



    public static function Title()
    {
        $url = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME);
        $url_var = explode('/', $url);
        $last_folder = end($url_var);
        return  ucwords(str_replace('-', ' ', $last_folder));
    }


    

   

    public static function Header()
    {
        $root = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..').'/layouts/Header.php';
        if (file_exists($root)) {
            $contents = file_get_contents($root);
            eval(' ?>' . $contents . '<?php ');
        } else {
            echo '<b>Algo salió mal!<b>';
        }
    }


    public function render($template_name)
    {
        $path = $template_name . '.php';

        if (file_exists($path)) {
            $contents = file_get_contents($path);
            eval(' ?>' . $contents . '<?php ');
        } else {
            echo(' file not found');
        }
    }

    public static function Footer()
    {
        $root = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..').'/layouts/Footer.php';
        if (file_exists($root)) {
            $contents = file_get_contents($root);
            eval(' ?>' . $contents . '<?php ');
        } else {
            echo 'Algo salió mal';
        }
    }


    public static function FormVehiculos()
    {
        $root = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..').'/form/FormVehiculosContent.php';
        $respuesta = self::getContent($root) ;
        if ($respuesta != false) {
            return $respuesta;
        } else {
            echo '<b>Algo salió mal!<b>';
        }
    }


    public static function includeWithVariables($filePath, $variables = array())
    {
        $output = null;
        if (file_exists($filePath)) {
            // Extract the variables to a local namespace
            extract($variables);

            // Start output buffering
            ob_start();

            // Include the template file
            include $filePath;

            // End buffering and return its contents
            $output = ob_get_clean();
        }
   
        return $output;
    }
}
