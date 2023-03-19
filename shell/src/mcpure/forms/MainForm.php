<?php
namespace mcpure\forms;

use windows;
use std, gui, framework, mcpure;


class MainForm extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
    //    Ожидание
//       waitAsync(1000, function () use ($e, $event) {
//      });
//

        $this->loadlabel->text = "Подгрузка важных элементов...";
        
        
        waitAsync(1000, function () use ($e, $event) { //1
        
        $this->loadlabel->text = "Проверка характеристик...";
      
      //    Проверяем ОЗУ:
      $ram = $this->getRAM();
      echo "[INFO] Получена оперативная память: ".$ram." GB \n";
      // Отправляем сообщение
      $this->errorlabel->textColor = "#3CCCA5";
      $this->errorlabel->text = "ОЗУ подходит! Доступная оперативная память: ".$ram."GB";
      waitAsync(1500, function () use ($e, $event) {//2
      
      //     Проверяем Процессор:
       $cpuf = $this->getCPUF();
       echo "[INFO] Получена GHz процессора: ".$cpuf." GHz \n";
       
      
           $this->errorlabel->text = "Процессор подходит! GHz: ".$cpuf."";
           waitAsync(1500, function () use ($e, $event) {//3 
           $os = $this->getOS();
           echo "[INFO] Получены данные о ОС: ".$os."\n";
           $this->errorlabel->text = "ОС подходит! Текущая: ".$os;//." //".$osver."";
           
           waitAsync(1500, function () use ($e, $event) {//4 
              //s
              $this->errorlabel->textColor = "#b31a1a";
              $this->errorlabel->text = "Ошибок не обнаружено";        
            
              $this->loadlabel->text = "Запуск ОС...";
           
              waitAsync(1500, function () use ($e, $event) {//5
              
              $this->errorlabel->textColor = "#3CCCA5";
              $this->errorlabel->text = "Загрузка файла: ,,,.dll";
              
              $this->timer->start();
              waitAsync(5000, function () use ($e, $event) {//6
           $this->loadForm("desktop");
                    });//6
                 });//5
              });//4
           });//3
      });//2  
      
      
      
      
      
      
      
      
  //   СТАРЫЙ КОД:   
//function formatSize($bytes,$decimals=2){
//$size=array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
//$factor=floor((strlen($bytes)-1)/3);
//return sprintf("%.{$decimals}f",$bytes/pow(1024,$factor)).@$size[$factor];
//}
//$this->formatSize(Windows::getTotalRAM());

    
       
       
       





        
        
        
        
        
        
        
        
        
        
        
        
        
        }); //1
        


    }

}
