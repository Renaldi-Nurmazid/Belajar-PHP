<?php
      $nama = "Renaldi Nurmazid";

      echo $nama . "<br>";

      $nama_array = array("Fariz","Eben","Haikal","Rizky Giant","Indra");
      print_r($nama_array);echo "<br>";

      echo $nama_array[0]. "<br>";
      echo $nama_array[1]. "<br>";
      echo $nama_array[2]. "<br>";

      echo "<hr>";
      //versi foreach

      foreach ($nama_array AS $datanama)
      {
        echo $datanama . "<br>";
      }

      echo "<hr>";
      //versi for
      
      for ($i = 0; $i < count($nama_array); $i++)
      {
        echo $nama_array[$i] . "<br>";
      }
      //multiple array
      $kelasrpl1 = array
      (
        array("Rizky catur","L","Mancing"),
        array("eben","L","Maen bola"),
        array("fariz","L",array("Berenang","Maen game","Basket")),
        array("volly",array("Maen Kelereng",array("Maen Layangan")))
      );

      echo "<pre>";
      Print_r($kelasrpl1);
      echo "</pre>";

      echo "<hr>";
      echo $kelasrpl1[1][0] . " ";
      echo $kelasrpl1[2][2][0] . " ";
      echo $kelasrpl1[3][1][1][0] . " ";
      echo $kelasrpl1[0][2] . " ";
