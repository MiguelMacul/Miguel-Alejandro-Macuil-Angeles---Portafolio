package com.example.myapplication

import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import kotlinx.android.synthetic.main.activity_main.*
import android.app.AlertDialog
import android.content.DialogInterface

class MainActivity : AppCompatActivity() {
   private var temporal:Int = 0
   public var operacion:Int = 0
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        this.button21.setOnClickListener{
            ActionBotonIgual()
        }
        this.button1.setOnClickListener{
            ActionBotonSuma()
        }
        this.button2.setOnClickListener{
            ActionBotonResta()
        }
        this.button18.setOnClickListener{
            ActionBotonMultiplicacion()
        }
        this.button19.setOnClickListener{
            ActionBotonDivision()
        }

    }

     fun ActionBotonIgual() {

             if(this.operacion==1){
                 var operacionTemp=temporal+Integer.parseInt(this.editTextTextPersonName4.text.toString())
                 this.editTextTextPersonName4.setText("")
                 this.editTextTextPersonName4.setText(""+operacionTemp)
             }
             if(this.operacion==2){
                 var operacionTemp=temporal-Integer.parseInt(this.editTextTextPersonName4.text.toString())
                 this.editTextTextPersonName4.setText("")
                 this.editTextTextPersonName4.setText(""+operacionTemp)
             }
             if(this.operacion==3){
                 var operacionTemp=temporal*Integer.parseInt(this.editTextTextPersonName4.text.toString())
                 this.editTextTextPersonName4.setText("")
                 this.editTextTextPersonName4.setText(""+operacionTemp)
             }
             if(this.operacion==4){
                 var operacionTemp=temporal/Integer.parseInt(this.editTextTextPersonName4.text.toString())
                 this.editTextTextPersonName4.setText("")
                 this.editTextTextPersonName4.setText(""+operacionTemp)
             }
             this.temporal=0



         this.operacion=0
    }
    fun ActionBotonSuma() {
        if(!(this.editTextTextPersonName4.text.toString().equals(""))) {
            this.temporal = Integer.parseInt(this.editTextTextPersonName4.text.toString())
            this.editTextTextPersonName4.setText("")
            this.operacion = 1
        }else
            this.VentanaModal()
    }
    fun ActionBotonResta() {
        if(!(this.editTextTextPersonName4.text.toString().equals(""))) {
            this.temporal=Integer.parseInt(this.editTextTextPersonName4.text.toString())
            this.editTextTextPersonName4.setText("")
            this.operacion=2
        }else
            this.VentanaModal()
    }
    fun ActionBotonMultiplicacion() {
        if(!(this.editTextTextPersonName4.text.toString().equals(""))) {
            this.temporal=Integer.parseInt(this.editTextTextPersonName4.text.toString())
            this.editTextTextPersonName4.setText("")
            this.operacion=3
        }else
            this.VentanaModal()
    }
    fun ActionBotonDivision() {
        if(!(this.editTextTextPersonName4.text.toString().equals(""))) {
            this.temporal=Integer.parseInt(this.editTextTextPersonName4.text.toString())
            this.editTextTextPersonName4.setText("")
            this.operacion=4
        }else
            this.VentanaModal()
    }
    fun VentanaModal(){
        // create dialog box
        val dialogBuilder = AlertDialog.Builder(this)
        // set message of alert dialog
        dialogBuilder.setMessage("No has ingresadi un numero previo para esta operación")
            // if the dialog is cancelable
            .setCancelable(false)
            // positive button text and action
            .setNegativeButton("Acepto", DialogInterface.OnClickListener {
                    dialog, id -> dialog.cancel()
                this.editTextTextPersonName4.isActivated
            })


        // create dialog box
        val alert = dialogBuilder.create()
        // set title for alert dialog box
        alert.setTitle("Error")
        // show alert dialog
        alert.show()

    }

}