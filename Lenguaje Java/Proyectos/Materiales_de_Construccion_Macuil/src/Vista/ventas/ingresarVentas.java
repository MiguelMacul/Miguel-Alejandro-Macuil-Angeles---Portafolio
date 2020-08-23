/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Vista.ventas;

import Controlador.ClaseControladorSistema;
import Controlador.Url;
import Modelo.ClaseModeloSistema;
import Vista.Menu.Menu;
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author Miguel
 */
public class ingresarVentas extends javax.swing.JFrame {
    public ClaseControladorSistema Controlador;
    public ArrayList<String[]>datos;
    public int filas;
    public int cantidad,c;
    public DefaultTableModel model,model2;
    
    /**
     * Creates new form altaVentas
     */
    public ingresarVentas() {
        initComponents();
        
        filas=0;
        this.setLocationRelativeTo(null);
        Controlador=new ClaseControladorSistema();
        
        datos=Controlador.estrar();
        model = new DefaultTableModel();
        model.addColumn("Codigo");
        model.addColumn("Nombre");
        model.addColumn("Cantidad");
        model.addColumn("Precio");
        this.model2=new DefaultTableModel();
        model2.addColumn("Codigo");
        model2.addColumn("Nombre");
        model2.addColumn("Cantidad comprada");
        model2.addColumn("SubTotal");
        this.setSize(600,400);
        this.jTable2.setModel(model2);
        this.jTable1.setModel(model);
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel2 = new javax.swing.JLabel();
        jButton3 = new javax.swing.JButton();
        jLabel3 = new javax.swing.JLabel();
        jButton1 = new javax.swing.JButton();
        jButton4 = new javax.swing.JButton();
        jTextField1 = new javax.swing.JTextField();
        jButton2 = new javax.swing.JButton();
        jScrollPane2 = new javax.swing.JScrollPane();
        jTable2 = new javax.swing.JTable();
        jScrollPane3 = new javax.swing.JScrollPane();
        jTextArea2 = new javax.swing.JTextArea();
        jScrollPane1 = new javax.swing.JScrollPane();
        jTable1 = new javax.swing.JTable();
        jLabel4 = new javax.swing.JLabel();
        jLabel5 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jLabel2.setFont(new java.awt.Font("Times New Roman", 3, 24)); // NOI18N
        jLabel2.setForeground(new java.awt.Color(204, 51, 0));
        jLabel2.setText("Materiales de Construcción Macuil");
        getContentPane().add(jLabel2, new org.netbeans.lib.awtextra.AbsoluteConstraints(110, 10, -1, -1));

        jButton3.setText("Regresar");
        jButton3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton3ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton3, new org.netbeans.lib.awtextra.AbsoluteConstraints(470, 20, 110, 40));

        jLabel3.setFont(new java.awt.Font("Times New Roman", 3, 24)); // NOI18N
        jLabel3.setText("Buscar:");
        getContentPane().add(jLabel3, new org.netbeans.lib.awtextra.AbsoluteConstraints(30, 70, -1, -1));

        jButton1.setText("Buscar");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton1, new org.netbeans.lib.awtextra.AbsoluteConstraints(370, 70, 160, 30));

        jButton4.setText("Finalizar compra");
        jButton4.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton4ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton4, new org.netbeans.lib.awtextra.AbsoluteConstraints(180, 330, 230, 30));
        getContentPane().add(jTextField1, new org.netbeans.lib.awtextra.AbsoluteConstraints(140, 180, 410, 30));

        jButton2.setText("Agregar a la cuenta");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton2, new org.netbeans.lib.awtextra.AbsoluteConstraints(200, 210, 240, 30));

        jTable2.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null},
                {null, null, null, null}
            },
            new String [] {
                "Title 1", "Title 2", "Title 3", "Title 4"
            }
        ));
        jScrollPane2.setViewportView(jTable2);

        getContentPane().add(jScrollPane2, new org.netbeans.lib.awtextra.AbsoluteConstraints(20, 240, 530, 90));

        jTextArea2.setColumns(20);
        jTextArea2.setRows(5);
        jScrollPane3.setViewportView(jTextArea2);

        getContentPane().add(jScrollPane3, new org.netbeans.lib.awtextra.AbsoluteConstraints(120, 50, 240, 40));

        jTable1.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null},
                {null, null, null, null}
            },
            new String [] {
                "Title 1", "Title 2", "Title 3", "Title 4"
            }
        ));
        jScrollPane1.setViewportView(jTable1);

        getContentPane().add(jScrollPane1, new org.netbeans.lib.awtextra.AbsoluteConstraints(20, 110, 530, 60));

        jLabel4.setFont(new java.awt.Font("Times New Roman", 3, 24)); // NOI18N
        jLabel4.setText("Cantidad:");
        getContentPane().add(jLabel4, new org.netbeans.lib.awtextra.AbsoluteConstraints(20, 180, -1, 30));

        jLabel5.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Multimedia/fondo.jpg"))); // NOI18N
        getContentPane().add(jLabel5, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, 0, 600, 400));

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jButton3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton3ActionPerformed
        // TODO add your handling code here:
        menuVentas ver=new menuVentas();
        ver.setVisible(true);

        this.inicio();

        this.setVisible(false);
        this.dispose();
    }//GEN-LAST:event_jButton3ActionPerformed

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        // TODO add your handling code here:
        this.eliminar();
        boolean a=true;

        FileReader f = null;
        BufferedReader b = null;
         Url url=new Url();
   ////url.ruta("\\Modelo\\Inventario.txt")
        try {
            f = new FileReader(url.ruta("\\Modelo\\Inventario.txt"));
            b = new BufferedReader(f);
            String cadena;
            while((cadena = b.readLine())!=null) {
                String q[]=cadena.split("[,]");
                if(q[0].equals(this.jTextArea2.getText()) || q[1].equals(this.jTextArea2.getText())){
                    this.model.addRow(q);
                    a=false;
                }
            }
            f.close();
            b.close();
        } catch (IOException ex) {
            Logger.getLogger(ClaseModeloSistema.class.getName()).log(Level.SEVERE, null, ex);
        }
        if(a==true){
            JOptionPane.showMessageDialog(null, "El producto no fue encontrado");
        }else{
            JOptionPane.showMessageDialog(null, "exito producto encontrado");
        }
    }//GEN-LAST:event_jButton1ActionPerformed

    private void jButton4ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton4ActionPerformed
        // TODO add your handling code here:
   
        for(int i=0;i<this.jTable2.getRowCount();i++){
            String Salida=""+this.model2.getValueAt(i, 0)+","+this.model2.getValueAt(i, 1)+","+this.model2.getValueAt(i, 2)+","+this.model2.getValueAt(i, 3);
            this.agregarTextoAlfinal("\n"+Salida);
        }
    }//GEN-LAST:event_jButton4ActionPerformed

    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        //  agregar 
        String codigo="";
        String nombre="";
        double cantidad=0;
        double precio=0;
        double cantidadcompra=0;
        codigo=""+this.model.getValueAt(0, 0);
        nombre=""+this.model.getValueAt(0, 1);
        cantidad=Double.parseDouble(""+this.model.getValueAt(0, 2));
         precio=Double.parseDouble(""+this.model.getValueAt(0, 3));
         cantidadcompra=Double.parseDouble(this.jTextField1.getText());
         if((cantidad-cantidadcompra)>=1){
             String cadena=""+codigo+","+nombre+","+cantidadcompra+","+(cantidadcompra*precio);
             String array[]=cadena.split("[,]");
             this.model2.addRow(array);
             
             
         }else{
             JOptionPane.showMessageDialog(null, "cantidad de productos almacenados");
         }
         
         
    }//GEN-LAST:event_jButton2ActionPerformed
  
    
    public void agregarTextoAlfinal(String producto){
        String frase=producto;  
        System.out.print(frase);
        boolean bandera=true;
         Url url=new Url();
   //url.ruta("\\Modelo\\venta.txt")
        try {
              FileWriter es= new FileWriter(url.ruta("\\Modelo\\venta.txt"), true);
            for(int i=0;i<producto.length();i++){
                es.write(producto.charAt(i));
               
                
            }
            es.close();
             JOptionPane.showMessageDialog(null, "Informacion agregada correctamente");
            
        } catch (IOException ex) {
             JOptionPane.showMessageDialog(null, "Error al ingresar el archivo");
        } 
       
        
      
    }
      public void eliminar(){
        this.cantidad=this.jTable1.getRowCount();
       while(this.cantidad!=0){
            this.model.removeRow(0);
            this.cantidad--;
        }
    }
    public void inicio(){
       
        
         
        FileReader f = null;
         BufferedReader b = null;
          Url url=new Url();
   //url.ruta("\\Modelo\\Inventario.txt")
        try {
            f = new FileReader(url.ruta("\\Modelo\\Inventario.txt"));
        
       
        b = new BufferedReader(f);
        String cadena;
 
            while((cadena = b.readLine())!=null) {
                String a[]=cadena.split("[,]");

                this.model.addRow(a);
            }
             f.close();
            b.close();
        } catch (IOException ex) {
            
            Logger.getLogger(ClaseModeloSistema.class.getName()).log(Level.SEVERE, null, ex);
        }
       
    }       
    

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JButton jButton3;
    private javax.swing.JButton jButton4;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JScrollPane jScrollPane3;
    private javax.swing.JTable jTable1;
    private javax.swing.JTable jTable2;
    private javax.swing.JTextArea jTextArea2;
    private javax.swing.JTextField jTextField1;
    // End of variables declaration//GEN-END:variables
}