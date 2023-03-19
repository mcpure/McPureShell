<?php
namespace mcpure\modules;

use windows;
use std, gui, framework, mcpure;


class MainModule extends AbstractModule
{
    
    //getRAM - получить оперативную память
    //getCPUF - получить GHz процессора
    //getOS - получить операционную систему
    
    
    function getRAM(){
        // Get the total RAM in bytes
         $total_ram = Windows::getTotalRAM();

        // Convert bytes to gigabytes
         $total_ram_gb = round($total_ram / (1024 * 1024 * 1024), 2);
         
         echo "[INFO] Отправлена оперативная память: ".$total_ram_gb." GB \n";
         
         return $total_ram_gb;
         
    }
    
    function getCPUF(){
        $cpuf = Windows::getCpuFrequency();
        
        echo "[INFO] Отправлена GHz процессора: ".$cpuf." GHz \n";
        
        return $cpuf;
        
        
    }
    
    function getOS(){
        $os = System::getProperty('os.name');
        
        echo "[INFO] Отправлены данные о ОС: ".$os."\n";
        
        return $os;
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * @event timer.action 
     */
    function doTimerAction(ScriptEvent $e = null)
    {    
        $this->errorlabel->text = "Загрузка файла: b".rand(4,555)."meig.dll";
        
    }
    
    
    
    
    
    
    

}
