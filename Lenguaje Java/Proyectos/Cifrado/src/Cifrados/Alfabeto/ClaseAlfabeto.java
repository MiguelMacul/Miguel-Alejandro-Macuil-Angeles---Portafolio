/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Cifrados.Alfabeto;

/**
 *
 * @author Administrador
 */
public class ClaseAlfabeto {
    public ClaseAlfabeto(){
        
    }
    public int ValorAlfabeto(String letra){
        int valor=0;
        if(letra.equals("a") || letra.equals("A")){
            valor=0;
        }
         if(letra.equals("b") || letra.equals("B")){
            valor=1;
        }
          if(letra.equals("c") || letra.equals("C")){
            valor=2;
        }
           if(letra.equals("d") || letra.equals("D")){
            valor=3;
        }
            if(letra.equals("e") || letra.equals("E")){
            valor=4;
        }
             if(letra.equals("f") || letra.equals("F")){
            valor=5;
        }
              if(letra.equals("g") || letra.equals("G")){
            valor=6;
        }
              if(letra.equals("h") || letra.equals("H")){
            valor=7;
        }
               if(letra.equals("i") || letra.equals("I")){
            valor=8;
        }
                if(letra.equals("j") || letra.equals("J")){
            valor=9;
        }
                 if(letra.equals("k") || letra.equals("K")){
            valor=10;
        }
                  if(letra.equals("l") || letra.equals("L")){
            valor=11;
        }
                   if(letra.equals("m") || letra.equals("M")){
            valor=12;
        }
                    if(letra.equals("n") || letra.equals("N")){
            valor=13;
        }
                     if(letra.equals("Ñ") || letra.equals("ñ")){
            valor=14;
        }
                      if(letra.equals("o") || letra.equals("O")){
            valor=15;
        }
                       if(letra.equals("p") || letra.equals("P")){
            valor=16;
        }
                        if(letra.equals("q") || letra.equals("Q")){
            valor=17;
        }
                         if(letra.equals("r") || letra.equals("R")){
            valor=18;
        }
                          if(letra.equals("s") || letra.equals("S")){
            valor=19;
        }
                           if(letra.equals("t") || letra.equals("T")){
            valor=20;
        }
                            if(letra.equals("u") || letra.equals("U")){
            valor=21;
        }
                             if(letra.equals("v") || letra.equals("V")){
            valor=22;
        }
                              if(letra.equals("w") || letra.equals("W")){
            valor=23;
        }
                               if(letra.equals("x") || letra.equals("X")){
            valor=24;
        }
                                if(letra.equals("y") || letra.equals("Y")){
            valor=25;
        }
                                 if(letra.equals("z") || letra.equals("Z")){
            valor=26;
        }
                   
                   
        return valor;
    }
}
