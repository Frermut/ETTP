<?php
public class Response
{public enum StatusList
   {
       case Ok;
       case Error;
   }  
 public StatusList $Status;
 public $Data;
}