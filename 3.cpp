/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, PHP, Ruby, 
C#, VB, Perl, Swift, Prolog, Javascript, Pascal, HTML, CSS, JS
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
#include <iostream>
 
using namespace std;
 
int main()
{
  cout << "##  Program C++ Persegi Bintang  ##" << endl;
  cout << "===================================" << endl;
  cout << endl;
 
  int besar_persegi,i,j;
 
  cout << "Input besar persegi: ";
  cin >> besar_persegi;
 
  cout << endl;
 
  for(i=0; i<besar_persegi; i++)
    {
        for(j=0; j<besar_persegi; j++)
        {
            if(i==0 || i==besar_persegi-1)
            {
                cout<<("+");
            }
            else
            {
                if(j==2 || j==besar_persegi-3)
                {
                    cout<<("+");
                }
                else
                {
                    cout<<("=");
                }
            }
        }
        cout<<("")<<endl;
    }


  return 0;
}