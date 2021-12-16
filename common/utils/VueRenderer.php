<?
/**
 * Created by SimpleForYou.
 * User: Marvin Thör
 * Datum: 29.05.2020 14:11
 */

namespace app\common\utils;

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
        return $_SERVER['DOCUMENT_ROOT'] . 'web/prod';
    }
    
    private static function getFiles($path) {
        $prodFiles = glob(self::getVueBasePath() . '/' . $path . '/*.' . $path . '');
        $files = [];
        foreach($prodFiles as $file) {
            $fileExplode = explode('/', $file);
            $files[filemtime($file)][] = end($fileExplode);
        }
        if(count($files) === 0)
            return [];
        $newestFilesIndex = max(array_keys($files));
        $newestFiles = $files[$newestFilesIndex];
        
        foreach($prodFiles as $file) {
            $fileExplode = explode('/', $file);
            $fileName = end($fileExplode);
            if(!in_array($fileName, $newestFiles)) {
                $mapFile = $file . '.map';
                if(file_exists($file))
                    unlink($file);
                if(file_exists($mapFile))
                    unlink($mapFile);
            }
        }
        
        return $newestFiles;
    }
}
