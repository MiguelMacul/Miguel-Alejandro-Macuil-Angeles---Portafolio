/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Vista.Menu;

import Vista.Informe.InformeGeneral;
import Vista.Inventario.ConsultarInventario;
import Vista.Inventario.Inventario;
import Vista.Pedidos.pedidosMenu;
import Vista.ventas.ingresarVentas;
import Vista.ventas.menuVentas;

import java.awt.Image;
import javax.swing.ImageIcon;

/**
 *
 * @author Miguel
 */
public class Menu extends javax.swing.JFrame {

    /**
     * Creates new form Menu
     */
    public Menu() {
       
        initComponents();
         this.setSize(600,400);
        this.setLocationRelativeTo(null);
         ImageIcon Icono1=new ImageIcon(getClass().getResource("/Multimedia/inventario.png"));
        ImageIcon mostrar1=new ImageIcon(Icono1.getImage().getScaledInstance(this.jButton1.getWidth(),this.jButton1.getHeight(),Image.SCALE_DEFAULT));
        this.jButton1.setIcon(mostrar1);
        //----------------------------------------------------------------------------------
        ImageIcon Icono2=new ImageIcon(getClass().getResource("/Multimedia/venta.png"));
        ImageIcon mostrar2=new ImageIcon(Icono2.getImage().getScaledInstance(this.jButton2.getWidth(),this.jButton2.getHeight(),Image.SCALE_DEFAULT));
        this.jButton2.setIcon(mostrar2);
        //----------------------------------------------------------------------------------
        ImageIcon Icono3=new ImageIcon(getClass().getResource("/Multimedia/Pedidos.png"));
        ImageIcon mostrar3=new ImageIcon(Icono3.getImage().getScaledInstance(this.jButton3.getWidth(),this.jButton3.getHeight(),Image.SCALE_DEFAULT));
        this.jButton3.setIcon(mostrar3);
        //----------------------------------------------------------------------------------
        ImageIcon Icono4=new ImageIcon(getClass().getResource("/Multimedia/Informe.png"));
        ImageIcon mostrar4=new ImageIcon(Icono4.getImage().getScaledInstance(this.jButton4.getWidth(),this.jButton4.getHeight(),Image.SCALE_DEFAULT));
        this.jButton4.setIcon(mostrar4);
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jButton1 = new javax.swing.JButton();
        jButton2 = new javax.swing.JButton();
        jButton3 = new javax.swing.JButton();
        jButton4 = new javax.swing.JButton();
        jLabel5 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jLabel1.setFont(new java.awt.Font("Times New Roman", 3, 24)); // NOI18N
        jLabel1.setForeground(new java.awt.Color(204, 51, 0));
        jLabel1.setText("Materiales de Construcción Macuil");
        getContentPane().add(jLabel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(140, 20, -1, -1));

        jButton1.setText("Inventario");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton1, new org.netbeans.lib.awtextra.AbsoluteConstraints(40, 100, 146, 104));

        jButton2.setText("Venta");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton2, new org.netbeans.lib.awtextra.AbsoluteConstraints(220, 100, 146, 104));

        jButton3.setBackground(new java.awt.Color(255, 255, 255));
        jButton3.setText("Pedidos");
        jButton3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton3ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton3, new org.netbeans.lib.awtextra.AbsoluteConstraints(400, 100, 146, 104));

        jButton4.setText("Informe");
        jButton4.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton4ActionPerformed(evt);
            }
        });
        getContentPane().add(jButton4, new org.netbeans.lib.awtextra.AbsoluteConstraints(40, 230, 146, 104));

        jLabel5.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Multimedia/fondo.jpg"))); // NOI18N
        getContentPane().add(jLabel5, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, 0, 600, 400));

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        //boton Inventario
        Inventario v=new Inventario();
         this.setVisible(false);
            v.setVisible(true);
            this.dispose();
    }//GEN-LAST:event_jButton1ActionPerformed

    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        // TODO add your handling code here:
        menuVentas objecto=new menuVentas();
         this.setVisible(false);
            objecto.setVisible(true);
            this.dispose();
    }//GEN-LAST:event_jButton2ActionPerformed

    private void jButton4ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton4ActionPerformed
        // TODO add your handling code here:
        InformeGeneral objecto=new InformeGeneral();
         this.setVisible(false);
            objecto.setVisible(true);
            this.dispose();
    }//GEN-LAST:event_jButton4ActionPerformed

    private void jButton3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton3ActionPerformed
        // TODO add your handling code here:
         pedidosMenu objecto=new pedidosMenu();
         this.setVisible(false);
            objecto.setVisible(true);
            this.dispose();
    }//GEN-LAST:event_jButton3ActionPerformed

    /**
     * @param args the command line arguments
     */
 

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JButton jButton3;
    private javax.swing.JButton jButton4;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel5;
    // End of variables declaration//GEN-END:variables
}
