<?php

function f1() 
{
    echo ">F1 está antes da exceção"."<br/>";
}

function f2($int)
{
  if(!is_int($int))
  {
      throw new Exception("O argumento não é do tipo esperado");
  }
  else
  {
    echo ">F2 está na exceção"."<br/>";
  }

  f3();
}

function f3()
{
    echo ">F3 está depois da exceção";
}

f1();
f2(
    int: 5.5 // O tipo float causará exceção para que a pilha seja analisada
);