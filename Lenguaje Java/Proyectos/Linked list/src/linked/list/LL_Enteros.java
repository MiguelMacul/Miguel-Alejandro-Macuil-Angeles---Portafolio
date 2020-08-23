/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package linked.list;
import java.util.LinkedList; 
import java.util.Queue; 
public class LL_Enteros {
    public LinkedList<String>ll;
    public LinkedList<Integer>l2;
    public LL_Enteros(){
        ll = new LinkedList<>();
        l2 = new LinkedList<>();
    }
    public void guardar (String color, int numero){
        ll.add(color);
        l2.add(numero);
    }
    public void eliminar(){
        if (ll.size() == 0 && l2.size() == 0){
            System.out.print("No hay elementos");
        }
        else{
             ll.remove();
             l2.remove();
            System.out.println("El dato se elimino");
        }
    }
    public void recorrer (){

        for( int i=0; i<ll.size(); i++){
        System.out.print(ll.get(i)+"|"+l2.get(i)+"->");
    }
        System.out.println("null");
    }
}
