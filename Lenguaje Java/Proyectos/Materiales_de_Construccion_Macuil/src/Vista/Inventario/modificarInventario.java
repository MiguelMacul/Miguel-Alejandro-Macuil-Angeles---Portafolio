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
public class modificarInventario extends javax.swing.JFrame {
    public ClaseControladorSistema Controlador;
    public ArrayList<String[]>ver;
    public int filas;
    public int cantidad,c;
    public DefaultTableModel model;
    /**
     * Creates new form modificarInventario
     */
    public modificarInventario() {
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
        this.jLabel1.setVisible(false);
        this.jLabel7.setVisible(false);
        this.jLabel8.setVisible(false);
        this.jLabel9.setVisible(false);
        this.jLabel10.setVisible(false);
        this.jTextField1.setVisible(false);
        this.jTextField2.setVisible(false);
        this.jTextField3.setVisible(false);
        this.jTextField4.setVisible(false);
        this.jButton2.setVisible(false);
      //  this.Inventario(); 
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
        jLabel3 = new javax.swing.JLabel();
        jLabel1 = new javax.swing.JLabel();
        jScrollPane3 = new javax.swing.JScrollPane();
        jTextArea2 = new javax.swing.JTextArea();
        jLabel4 = new javax.swing.JLabel();
        jScrollPane1 = new javax.swing.JScrollPane();
        jTable1 = new javax.swing.JTable();
        jLabel6 = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        jTextField1 = new javax.swing.JTextField();
        jButton1 = new javax.swing.JButton();
        jTextField2 = new javax.swing.JTextField();
        jLabel9 = new javax.swing.JLabel();
        jTextField3 = new javax.swing.JTextField();
        jLabel8 = new javax.swing.JLabel();
        jLabel10 = new javax.swing.JLabel();
        jTextField4 = new javax.swing.JTextField();
        jButton2 = new javax.swing.JButton();
        jButton3 = new javax.swing.JButton();
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

        jLabel1.setFont(new java.awt.Font("Times New Roman", 3, 24)); // NOI18N
        jLabel1.setText("Modificar");
        getContentPane().add(jLabel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(210, 190, -1, -1));

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

        jLabel7.setText("Cantidad");
        getContentPane().add(jLabel7, new org.netbeans.lib.awtextra.AbsoluteConstraints(100, 310, -1, -1));
        getContentPane().add(jTextField1, new org.netbeans.lib.awtextra.AbsoluteConstraints(150, 220, 340, -1));

        jButton1.setText("Buscar");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton1, new org.netbeans.lib.awtextra.AbsoluteConstraints(410, 90, 160, 40));
        getContentPane().add(jTextField2, new org.netbeans.lib.awtextra.AbsoluteConstraints(150, 250, 340, -1));

        jLabel9.setText("Nombre");
        getContentPane().add(jLabel9, new org.netbeans.lib.awtextra.AbsoluteConstraints(100, 250, -1, -1));
        getContentPane().add(jTextField3, new org.netbeans.lib.awtextra.AbsoluteConstraints(150, 280, 340, -1));

        jLabel8.setText("Codigo");
        getContentPane().add(jLabel8, new org.netbeans.lib.awtextra.AbsoluteConstraints(100, 220, -1, -1));

        jLabel10.setText("Precio");
        getContentPane().add(jLabel10, new org.netbeans.lib.awtextra.AbsoluteConstraints(100, 280, -1, -1));
        getContentPane().add(jTextField4, new org.netbeans.lib.awtextra.AbsoluteConstraints(150, 310, 340, -1));

        jButton2.setText("Modificar");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton2, new org.netbeans.lib.awtextra.AbsoluteConstraints(180, 340, 210, 20));

        jButton3.setText("Regresar");
        jButton3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton3ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton3, new org.netbeans.lib.awtextra.AbsoluteConstraints(470, 20, 110, 40));

        jLabel5.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Multimedia/fondo.jpg"))); // NOI18N
        getContentPane().add(jLabel5, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, 0, 600, 400));

        pack();
    }// </editor-fold>//GEN-END:initComponents
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
            this.jLabel1.setVisible(false);
            this.jLabel7.setVisible(false);
            this.jLabel8.setVisible(false);
            this.jLabel9.setVisible(false);
            this.jLabel10.setVisible(false);
            this.jTextField1.setVisible(false);
            this.jTextField2.setVisible(false);
            this.jTextField3.setVisible(false);
            this.jTextField4.setVisible(false);
            this.jButton2.setVisible(false);
            
        }else{
            this.jLabel1.setVisible(true);
            this.jLabel7.setVisible(true);
            this.jLabel8.setVisible(true);
            this.jLabel9.setVisible(true);
            this.jLabel10.setVisible(true);
            this.jTextField1.setVisible(true);
            this.jTextField2.setVisible(true);
            this.jTextField3.setVisible(true);
            this.jTextField4.setVisible(true);
            this.jButton2.setVisible(true);
             String ver1=""+this.model.getValueAt(0, 0);
            this.jTextField1.setText(ver1);
            String ver2=""+this.model.getValueAt(0, 1);
            this.jTextField2.setText(ver2);
            String ver3=""+this.model.getValueAt(0, 2);
            this.jTextField4.setText(ver3);
            String ver4=""+this.model.getValueAt(0, 3);
            this.jTextField3.setText(ver4);
            JOptionPane.showMessageDialog(null, "exito producto encontrado");
            this.jTextField1.setEnabled(false);
        }
        /*  for(int i=0;i<this.model.getColumnCount();i++)
        System.out.println(this.model.getValueAt(0,i));*/

    }//GEN-LAST:event_jButton1ActionPerformed

    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        // TODO add your handling code here:modificar
        ArrayList<String> lista=new ArrayList<String>();
        
        for(int i=0;i<ver.size();i++){
            
            
            String vale[]=ver.get(i);
             String salida="";
            if(vale[0].equals(this.jTextField1.getText())){
              
                salida=""+this.jTextField1.getText()+","+this.jTextField2.getText()+","+this.jTextField4.getText()+","+this.jTextField3.getText()+"\n";
                lista.add(salida);
                 
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
        this.jTextField1.setText("");
        this.jTextField2.setText("");
        this.jTextField3.setText("");
        this.jTextField4.setText("");
       this.jLabel1.setVisible(false);
        this.jLabel7.setVisible(false);
        this.jLabel8.setVisible(false);
        this.jLabel9.setVisible(false);
        this.jLabel10.setVisible(false);
        this.jTextField1.setVisible(false);
        this.jTextField2.setVisible(false);
        this.jTextField3.setVisible(false);
        this.jTextField4.setVisible(false);
        this.jButton2.setVisible(false);
        Controlador=new ClaseControladorSistema();
        Controlador.modificacionInventario(lista);
        this.eliminar();
        
    }//GEN-LAST:event_jButton2ActionPerformed

    private void jButton3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton3ActionPerformed
        // TODO add your handling code here:
        Inventario ver=new Inventario();
        ver.setVisible(true);
        this.setVisible(false);
         this.dispose();
    }//GEN-LAST:event_jButton3ActionPerformed

    /**
     * @param args the command line arguments
     */
   
 public void cargar(){
        this.cantidad=0;
       for(int i=0;i<ver.size();i++){
           this.cantidad+=1;
           this.model.addRow(ver.get(i));
       }
    }
    public void eliminar(){
        this.cantidad=this.jTable1.getRowCount();
       while(this.cantidad!=0){
            this.model.removeRow(0);
            this.cantidad--;
        }
    }
    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JButton jButton3;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel10;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JLabel jLabel9;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JScrollPane jScrollPane3;
    private javax.swing.JTable jTable1;
    private javax.swing.JTextArea jTextArea2;
    private javax.swing.JTextField jTextField1;
    private javax.swing.JTextField jTextField2;
    private javax.swing.JTextField jTextField3;
    private javax.swing.JTextField jTextField4;
    // End of variables declaration//GEN-END:variables
}
