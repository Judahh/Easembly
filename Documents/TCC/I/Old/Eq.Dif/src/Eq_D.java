/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
import java.lang.Math;
/**
 *
 * @author JH
 */
public class Eq_D {
    private String Eq;//equção do segundo grau
    private double a;
    private double b;
    private double c;
    private double D1;
    private double D2;
    private double delta;
    
    public Eq_D(String Eq){
        this.Eq=Eq;
        SearchCtes();
        CalcD();
    }
    
    public double getA(){
        return this.a;
    }
    
    public double getB(){
        return this.b;
    }
    
    public double getC(){
        return this.c;
    }
    
    private void SearchCtesMaqEst(){//testar e terminar
        double d1=0.0;
        boolean intro=false;
        boolean elev=false;
        boolean c1=true;
        boolean c2=false;
        boolean c3=false;
        String A="";
        String B="";
        String C="";
        int i=0;
        int j=0;
        int t=0;
        int k=0;
        int m=0;
        while(this.Eq.charAt(i)!='='){
            switch(t){
                case 1://pega o a
                    if(intro){
                        while(this.Eq.charAt(i)!='+'||this.Eq.charAt(i)!='-'||i!=0){
                            i--;
                        }
                        intro=false;
                    }
                    k=0;
                    m=0;
                    while(this.Eq.charAt(i)!='D'||this.Eq.charAt(i)!='='){
                        //começar a pegar o a
                        C+=this.Eq.charAt(i);
                        if(k==0){
                            m=1;
                        }else{
                            m=(int)Math.pow(10,k);
                        }
                        c=c+Integer.parseInt(C)*m;
                        i++;
                        k++;
                    }
                
                break;
                case 2://pega o b
                    if(intro){
                        while(this.Eq.charAt(i)!='+'||this.Eq.charAt(i)!='-'||i!=0){
                            i--;
                        }
                        intro=false;
                    }
                    k=0;
                    m=0;
                    while(this.Eq.charAt(i)!='D'||this.Eq.charAt(i)!='='){
                        //começar a pegar o b
                        C+=this.Eq.charAt(i);
                        if(k==0){
                            m=1;
                        }else{
                            m=(int)Math.pow(10,k);
                        }
                        c=c+Integer.parseInt(C)*m;
                        i++;
                        k++;
                    }
                
                break;  
                case 3://pega o c
                    if(intro){
                        while(this.Eq.charAt(i)!='+'||this.Eq.charAt(i)!='-'||i!=0){
                            i--;
                        }
                        intro=false;
                    }
                    k=0;
                    m=0;
                    while(this.Eq.charAt(i)!='='){
                        //começar a pegar o c
                        C+=this.Eq.charAt(i);
                        if(k==0){
                            m=1;
                        }else{
                            m=(int)Math.pow(10,k);
                        }
                        c=c+Integer.parseInt(C)*m;
                        i++;
                        k++;
                    }
                
                break;
                default://search
                if(this.Eq.charAt(i)=='^'){
                    i++;
                    if(this.Eq.charAt(i)=='2'){
                        t=1;
                        intro=true;
                    }
                    if(this.Eq.charAt(i)=='1'){
                        t=2;
                        intro=true;
                    }
                }
                i++;
                break;     
            }
        }
    }
    
    private void SearchCtes(){//funfa,tranformar para maquina de estado
        double d1=0.0;
        boolean elev=false;
        boolean c1=true;
        boolean c2=false;
        boolean c3=false;
        String A="";
        String B="";
        String C="";
        int i=0;
        int j=0;
        while(this.Eq.charAt(i)!='=') {
            //j=i;
            if(this.Eq.charAt(i)=='+'||this.Eq.charAt(i)=='D'){
                    i++;
            }
            if(this.Eq.charAt(i)=='^'){
                    elev=true;
                    i++;
            }
            if(this.Eq.charAt(i)=='2'&&elev) {//final do D^2
                if(A==""){
                    this.a=0.0;
                }else{
                    this.a=Integer.parseInt(A);
                }   
                elev=false;  
                c1=false;
                c2=true;
                i++;
            }
            if(this.Eq.charAt(i)=='1'&&elev) {//final do D^1
                if(B==""){
                    this.b=0.0;
                }else{
                    this.b=Integer.parseInt(B);
                }               
                elev=false;  
                c2=false;
                c3=true;
                i++;
            }
            if(c1&&!elev){
                    A+=this.Eq.charAt(i);
            }
            if(c2&&!elev){
                    B+=this.Eq.charAt(i);
            }
            if(c3&&!elev){
                    C+=this.Eq.charAt(i);
            }
            i++;
        } 
        if(C==""){
          this.c=0.0;
        }else{
          this.c=Integer.parseInt(C);
        }   
    }
    
    private void CalcD(){//funfa
        this.delta=0.0;
        if(this.b==0.0){
            this.delta=-4*this.a*this.c;
        }else{
            this.delta=Math.pow(this.b,2)-4*this.a*this.c;
        }
        if(this.delta==0.0){
            this.D1=(-this.b)/(2*this.a);
            this.D2=(-this.b)/(2*this.a);
        }else{
            this.delta=Math.sqrt(this.delta);
            this.D1=(-this.b+this.delta)/(2*this.a);
            this.D2=(-this.b-this.delta)/(2*this.a);
        }
    }
    
    public double getD1(){
        return this.D1;
    }
    
    public double getD2(){
        return this.D2;
    }
}
