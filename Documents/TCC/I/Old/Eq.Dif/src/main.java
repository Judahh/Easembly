
import java.util.Scanner;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author JH
 */
public class main {

    /**
     * @param args the command line arguments
     */
    public static String MakeD(String k){//tranformar para maquina de estado
        String m="";
        int i=0;
        int j=0;
        if(k.charAt(i)!='y'){
            m="1D";    
            i=2;
        }
        while(k.charAt(i)!='=') {
            if(k.charAt(i)=='y'){
                m+="D";
                i++;
                //j=i+1;
            }
            
            if(k.charAt(i)=='`' && k.charAt(i+1)=='+'){
                m+="^1+";
                i++;
                i++;
                //j=i+1;
            }
            
            if(k.charAt(i)=='`' && k.charAt(i+1)=='`'){
                m+="^2";
                i++;
                i++;
                //j=i;
            }
            
            m+=k.charAt(i);
            i++;
        } 
        m+="=";
        return m;
    }
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        String m;
        String n;
        System.out.println("Digite a Equação Diferencial:");
        m = sc.next();//teste:1y``+3y`+0=10x
        System.out.println("Equação Diferencial:"+m);
        n=MakeD(m);
        System.out.println("D:"+n);
        Eq_D D = new Eq_D(n);
        System.out.println("D1:"+D.getD1());
        System.out.println("D2:"+D.getD2());
        // TODO code application logic here
    }
}
