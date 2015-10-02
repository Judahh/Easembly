/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author JH
 */
public class Matrix {
    private int [][]N; //quantidade que possui a caixa
    //1 peão preto
    //2 cavalo preto
    //3 torre preto
    //4 bispo preto
    //5 rainha preto
    //6 rei preto
    
    //7 peão branco
    //8 cavalo branco
    //9 torre branco
    //10 bispo branco
    //11 rainha branco
    //12 rei branco
    
    public Matrix(){
        this.N = new int[8][8];
        //peões
        for(int i=0;i<8;i++){
            for(int j=0;j<8;j++){
                this.N[i][j]=0;
                this.N[i][j]=0;
            }
        }
        for(int i=0;i<8;i++){
            this.N[i][1]=1;
            this.N[i][6]=7;
        }
        //cavalos
        this.N[0][1]=2;
        this.N[0][6]=2;
        this.N[7][1]=8;
        this.N[7][6]=8;
        //torres
        this.N[0][0]=3;
        this.N[0][7]=3;
        this.N[7][0]=9;
        this.N[7][7]=9;
        //bispos
        this.N[0][2]=4;
        this.N[0][5]=4;
        this.N[7][2]=10;
        this.N[7][5]=10;
        //rainha
        this.N[0][3]=5;
        this.N[7][3]=11;
        //rei
        this.N[0][4]=6;
        this.N[7][4]=12;
    }
    
    public Matrix(int t){
        this.N = new int[t][t]; 
    }
    
    public void MovePawnsBlack(int x,int y){//Peão Preto
         this.N[x][y]=0;
         this.N[x][y+1]=1;
    }
    
    public void MovePawnsWhite(int x,int y){//Peão Branco
         this.N[x][y]=0;
         this.N[x][y-1]=1;
    }
    
    public void MoveKnight(int x,int y,int t){//t= opções de movimentos de 0 ao 7 (cavalo)
        t=t+1; 
        switch(t){
             case 1:
             case 2:
                   this.N[x][y]=0;
                   this.N[x+((int) Math.pow (-1, t))][y-2]=2;
             break;
             case 3:
             case 4:
                   this.N[x][y]=0;
                   this.N[x+2*((int) Math.pow (-1, t))][y-1]=2;
             break;
             case 5:
             case 6:
                   this.N[x][y]=0;
                   this.N[x+2*((int) Math.pow (-1, t))][y+1]=2;
             break;  
             case 7:
             case 8:
                   this.N[x][y]=0;
                   this.N[x+((int) Math.pow (-1, t))][y+2]=2;
             break;     
         }
    }
    public void MoveRook(int x,int y,boolean t,int n){//false->eixo X,true->eixo Y (torre)
         if(t){
             this.N[x][y]=0;
             this.N[x][y+n]=3;
         }else{
             this.N[x][y]=0;
             this.N[x+n][y]=3;
         }
    }
    public void MoveBishop(int x,int y,boolean t,int n){//false->Diagonal Sec.,true->Diagonal Princ. (bispo)
         if(t){
             this.N[x][y]=0;
             this.N[x+n][y+n]=4;
         }else{
             this.N[x][y]=0;
             this.N[x-n][y+n]=4;
         }
    }
    public void MoveQueen(int x,int y,int t,int n){//rainha
         switch(t){
             case 0://eixo Y
                 this.N[x][y]=0;
                 this.N[x][y+n]=5;
             break;
             case 1://eixo X
                 this.N[x][y]=0;
                 this.N[x+n][y]=5;
             break;
             case 2://Diagonal Princ.
                 this.N[x][y]=0;
                 this.N[x+n][y+n]=5;
             break;
             case 3://Diagonal Sec
                 this.N[x][y]=0;
                 this.N[x-n][y+n]=5;
             break;    
         }
    }
    public void MoveKing(int x,int y,int t){//rei
         switch(t){
             case 0://eixo Y
                 this.N[x][y]=0;
                 this.N[x][y+1]=5;
             break;
             case 1://eixo X
                 this.N[x][y]=0;
                 this.N[x+1][y]=5;
             break;
             case 2://Diagonal Princ.
                 this.N[x][y]=0;
                 this.N[x+1][y+1]=5;
             break;
             case 3://Diagonal Sec
                 this.N[x][y]=0;
                 this.N[x-1][y+1]=5;
             break;    
         }
    }
    
    public boolean CanMove(int x,int y,int t,int n){
        switch(this.N[x][y]){
             case 1://Peão Branco
                 if(y+1>7)return false;
                 if(this.N[x][y+1]!=0)return false;
             break;
             case 7://Peão Preto
                 if(y-1<0)return false;
                 if(this.N[x][y-1]!=0)return false;
             break;
             case 2://cavalo
             case 8://cavalo    
                 CanMoveKnight(x,y,t,n);
             break;    
             case 3://torre
             case 9://torre    
                 CanMoveRook(x,y,t,n);
             break;
             case 4://bispo
             case 10://bispo    
                 CanMoveBishop(x,y,t,n);
             break;   
             case 5://rainha
             case 11://rainha    
                 CanMoveQueen(x,y,t,n);
             break;
             case 6://rei
             case 12://rei    
                 CanMoveKing(x,y,t,n);
             break;      
        }
        return true;
    }
    public boolean CanMoveKnight(int x,int y,int t,int n){
        return true;
    }
    public boolean CanMoveRook(int x,int y,int t,int n){
        return true;
    }
    public boolean CanMoveBishop(int x,int y,int t,int n){
        return true;
    }
    public boolean CanMoveQueen(int x,int y,int t,int n){
        return true;
    }
    public boolean CanMoveKing(int x,int y,int t,int n){
        return true;
    }
    //TODO:terminar metodos CanMove,Kill e CanKill 
}
