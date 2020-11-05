<?
/**
 * Created by SimpleForYou.
 * User: Marvin Thör
 * Datum: 29.05.2020 14:11
 */

namespace app\src\utils;

class VueRenderer {
    
    static function head() {
        $html = '';
        foreach(self::getFiles('js') as $jsFile) {
            $html .= '<link href="prod/js/' . $jsFile . '" rel="preload" as="script"/>';
        }
        foreach(self::getFiles('css') as $cssFile) {
            $html .= '<link href="prod/css/' . $cssFile . '" rel="stylesheet"/>';
        }
        
        return $html;
    }
    
    static function body() {
        $html = '';
        foreach(self::getFiles('js') as $jsFile) {
            $html .= '<script src="prod/js/' . $jsFile . '"></script>';
        }
        
        return $html;
    }
    
    private static function getVueBasePath() {
        return $_SERVER['DOCUMENT_ROOT'] . '/prod';
    }
    
    private static function getFiles($path) {
        $jsFiles = glob(self::getVueBasePath() . '/' . $path . '/*.' . $path . '');
        $files = [];
        foreach($jsFiles as $file) {
            $fileExplode = explode('/', $file);
            $files[filemtime($file)][] = end($fileExplode);
        }
        if(count($files) === 0)
            return [];
        $newestFilesIndex = max(array_keys($files));
        $newestFiles = $files[$newestFilesIndex];
        
        foreach($jsFiles as $file) {
            $fileExplode = explode('/', $file);
            $fileName = end($fileExplode);
            if(!in_array($fileName, $newestFiles)) {
                $mapFile = $file . '.map';
                unlink($file);
                unlink($mapFile);
            }
        }
        
        return $newestFiles;
    }
}
