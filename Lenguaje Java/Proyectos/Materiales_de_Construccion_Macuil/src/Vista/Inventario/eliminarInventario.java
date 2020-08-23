/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Vista.Inventario;

import Controlador.ClaseControladorSistema;
import Controlador.Url;
import Modelo.ClaseModeloSistema;
import java.io.BufferedReader;
import java.io.FileReader;
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
public class eliminarInventario extends javax.swing.JFrame {
     public ClaseControladorSistema Controlador;
    public ArrayList<String[] >ver;
    public int filas;
    public int cantidad,c;
    public DefaultTableModel model;
    /**
     * Creates new form eliminarInventario
     */
    public eliminarInventario() {
        initComponents();
        this.setSize(600,400);
        this.setLocationRelativeTo(null);
        ver=null;
        Controlador=null;
        model=null;
        model = new DefaultTableModel();
        
        model.addColumn("Codigo");
        model.addColumn("Nombre");
        model.addColumn("Cantidad");
        model.addColumn("Precio");
        this.jTable1.setModel(model);
        this.jButton2.setVisible(false);
       

    }
   public  void Inventario(){
        
         ArrayList<String[]> lista=new ArrayList<String[]>();
         
        FileReader f = null;
         BufferedReader b = null;
           Url url=new Url();
   //url.ruta("\\Modelo\\Inventario.txt")
        try {
            f = new FileReader(url.ruta("\\Modelo\\Inventario.txt"));
        
       
        b = new BufferedReader(f);
        String cadena;
 
            while((cadena = b.readLine())!=null) {
                String array[]=cadena.split("[,]");
                lista.add(array);
            }
             f.close();
            b.close();
        } catch (IOException ex) {
            
            Logger.getLogger(ClaseModeloSistema.class.getName()).log(Level.SEVERE, null, ex);
        }
        this.ver=lista;
    }
    public void eliminar(){
        this.cantidad=this.jTable1.getRowCount();
       while(this.cantidad!=0){
            this.model.removeRow(0);
            this.cantidad--;
        }
    }
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        jScrollPane3 = new javax.swing.JScrollPane();
        jTextArea2 = new javax.swing.JTextArea();
        jLabel4 = new javax.swing.JLabel();
        jScrollPane1 = new javax.swing.JScrollPane();
        jTable1 = new javax.swing.JTable();
        jLabel6 = new javax.swing.JLabel();
        jButton1 = new javax.swing.JButton();
        jButton3 = new javax.swing.JButton();
        jButton2 = new javax.swing.JButton();
        jLabel5 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jLabel2.setBackground(new java.awt.Color(255, 255, 255));
        jLabel2.setFont(new java.awt.Font("Times New Roman", 2, 24)); // NOI18N
        jLabel2.setText("Macuil");
        getContentPane().add(jLabel2, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 30, -1, 30));

        jLabel3.setBackground(new java.awt.Color(255, 255, 255));
        jLabel3.setFont(new java.awt.Font("Times New Roman", 2, 24)); // NOI18N
        jLabel3.setText("Menu Invetario");
        getContentPane().add(jLabel3, new org.netbeans.lib.awtextra.AbsoluteConstraints(40, 60, -1, -1));

        jTextArea2.setColumns(20);
        jTextArea2.setRows(5);
        jScrollPane3.setViewportView(jTextArea2);

        getContentPane().add(jScrollPane3, new org.netbeans.lib.awtextra.AbsoluteConstraints(100, 90, 290, 40));

        jLabel4.setBackground(new java.awt.Color(255, 255, 255));
        jLabel4.setFont(new java.awt.Font("Times New Roman", 2, 24)); // NOI18N
        jLabel4.setText("Materiales de construcción");
        getContentPane().add(jLabel4, new org.netbeans.lib.awtextra.AbsoluteConstraints(10, 0, -1, 30));

        jTable1.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null}
            },
            new String [] {
                "Title 1", "Title 2", "Title 3", "Title 4"
            }
        ));
        jScrollPane1.setViewportView(jTable1);

        getContentPane().add(jScrollPane1, new org.netbeans.lib.awtextra.AbsoluteConstraints(40, 140, 530, 50));

        jLabel6.setFont(new java.awt.Font("Times New Roman", 3, 24)); // NOI18N
        jLabel6.setText("Buscar:");
        getContentPane().add(jLabel6, new org.netbeans.lib.awtextra.AbsoluteConstraints(20, 90, -1, -1));

        jButton1.setText("Buscar");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton1, new org.netbeans.lib.awtextra.AbsoluteConstraints(410, 90, 160, 40));

        jButton3.setText("Regresar");
        jButton3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton3ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton3, new org.netbeans.lib.awtextra.AbsoluteConstraints(470, 20, 110, 40));

        jButton2.setText("Eliminar");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton2, new org.netbeans.lib.awtextra.AbsoluteConstraints(180, 210, 210, 40));

        jLabel5.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Multimedia/fondo.jpg"))); // NOI18N
        getContentPane().add(jLabel5, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, 0, 600, 400));

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        // TODO add your handling code here:
          this.Inventario();
        boolean a=true;
        for(int i=0;i<ver.size();i++){
            String valor[]=ver.get(i);
            
            if(valor[0].equals(this.jTextArea2.getText()) || valor[1].equals(this.jTextArea2.getText())){
               
                this.model.addRow(ver.get(i));
                a=false;
            }
        }
        if(a==true){
            this.eliminar();
            JOptionPane.showMessageDialog(null, "El producto no fue encontrado");
            this.jButton2.setVisible(false);
            
        }else{
            JOptionPane.showMessageDialog(null, "exito producto encontrado");
            this.jButton2.setVisible(true);
        }
    }//GEN-LAST:event_jButton1ActionPerformed

    private void jButton3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton3ActionPerformed
        // TODO add your handling code here:
        Inventario ver=new Inventario();
        ver.setVisible(true);
        this.setVisible(false);
         this.dispose();
    }//GEN-LAST:event_jButton3ActionPerformed

    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        // TODO add your handling code here:modificar
       ArrayList<String> lista=new ArrayList<String>();
        
        for(int i=0;i<ver.size();i++){
            
            
            String vale[]=ver.get(i);
             String salida="";
            if(vale[0].equals(this.jTextArea2.getText())){
              
                 
            }else{

                for(int j=0;j<vale.length;j++){
                    
                    if(j<vale.length-1){
                        salida+=vale[j]+",";
                    }else{
                        if(i<ver.size()-1)
                          salida+=vale[j]+"\n";
                        else
                            salida+=vale[j];
                    }
                }
                lista.add(salida);
            }
         System.out.print(salida);
        }
       
        this.jButton2.setVisible(false);
        Controlador=new ClaseControladorSistema();
        Controlador.modificacionInventario(lista);
        this.eliminar();

    }//GEN-LAST:event_jButton2ActionPerformed

    /**
     * @param args the command line arguments
     */
   

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JButton jButton3;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JScrollPane jScrollPane3;
    private javax.swing.JTable jTable1;
    private javax.swing.JTextArea jTextArea2;
    // End of variables declaration//GEN-END:variables
}
