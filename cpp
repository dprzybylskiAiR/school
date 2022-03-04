#include <iostream>
#include <algorithm>
#include <cstring>
using namespace std;

string sort(string s1){
    sort(s1.begin(), s1.end());
    return s1;
}

bool czyanagram(string s1, string s2)
{
    
    return (sort(s1)==sort(s2));
}

void wystapienia(string s1, string s2)
{
    int found=s1.find(s2);
    while (found != string::npos) {
        cout<<found<<" ";
        found=s1.find(s2, found + 1);
    }
}

int main()
{
    string tekst,tekst2;
    cin>>tekst;
    cin>>tekst2;
    bool czypalindrom;
    int j=tekst.length()-1;
    for(int i=0; i<tekst.length()/2; i++)
    {
       if(tekst[i]==tekst[j]){
           czypalindrom=true;
           j--;
       }
       else{
           czypalindrom=false;
           break;
       }
    }
    if(czypalindrom==true){
        cout<<"\nTo jest palindrom";
    }
    else cout<<"\nTo nie jest palindrom";
    
    cout<<"\nCzy anagram: "<<czyanagram(tekst, tekst2);
    
    cout<<"\nMiejsca wystapien tekstu: ";
    wystapienia(tekst, tekst2);
    return 0;
}

