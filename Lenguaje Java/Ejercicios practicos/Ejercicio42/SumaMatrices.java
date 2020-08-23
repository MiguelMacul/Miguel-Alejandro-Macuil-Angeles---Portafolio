import javax.swing.JOptionPane;

public class SumaMatrices {
    int A[][];
    int B[][];
    int C[][];
    int m;
    int n;
    
   public SumaMatrices()
   {
       m=Integer.parseInt(JOptionPane.showInputDialog("Dame el tamaño de las filas: "));
       n=Integer.parseInt(JOptionPane.showInputDialog("Dame el tamaño de las columnas: "));
       A=new int[m][n];
       B=new int[m][n];
       C=new int[m][n];             
   }
   
   public void llenarMatrizA()
   {
        for(int p=0; p<m; p++)
      {
          for(int q=0; q<n; q++)
          {
              A[p][q]=Integer.parseInt(JOptionPane.showInputDialog("De los datos para A: "));
          }
      }
   }
   public void llenarMatrizB()
   {
        for(int l=0; l<m; l++)
      {
          for(int a=0; a<n; a++)
          {
              B[l][a]=Integer.parseInt(JOptionPane.showInputDialog("De los datos para B: "));
          }
      }
   }
  
   public void sumarMatrices()
   {
       for(int i=0; i<m; i++)
          {
              for(int j=0; j<n; j++)
              {
              C[i][j]=A[i][j]+B[i][j]; 
              }
          }
   }
   public void mostrarMatriz()
    {
        String cad="";
        for(int c=0; c<m; c++)
        {
            
            cad=cad+"\n";
            for(int v=0; v<n; v++)
            {
                cad=cad+C[c][v]+" ";
               
            }
            }
        JOptionPane.showMessageDialog(null,"la suma de las matrices es: "+cad);
        }
   
   public void multiplicacionMatriz(){
        for(int i=0; i<m; i++)
          {
              for(int j=0; j<n; j++)
              {
              C[i][j]=A[i][j]*B[i][j]; 
              }
          }  
   }
    public void mostrarMultiplicacion()
    {
        String cad="";
        for(int c=0; c<m; c++)
        {
            
            cad=cad+"\n";
            for(int v=0; v<n; v++)
            {
                cad=cad+C[c][v]+" ";
               
            }
            }
        JOptionPane.showMessageDialog(null,"la multiplicacion es: "+cad);
        }
   
  
    public static void main(String[] args) {
        SumaMatrices n= new SumaMatrices();
        n.llenarMatrizA();
        n.llenarMatrizB();
        n.sumarMatrices();
        n.mostrarMatriz();
        n.multiplicacionMatriz();
        n.mostrarMultiplicacion();
       
        }
}