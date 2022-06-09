// pętla(warunek && warunek) koniunkcja (oba warunki muszą być spełnione)
// pętla(warunek || warunek) (jeden warunek musi być spełniony)







#include<iostream>
#include<cmath>
using namespace std;

// Bool sprawdza tylko czy wartosc jest prawdziwa
bool perfect(int number)
{
    int iter = 1;
    bool result;
    //int something = number % iter;
    while(iter < number)
    {

    if(number % iter != 0)
        {
            cout << "reszta z dzielenia jest inna niz 0" << endl;
        }
        iter ++;
    }
    
	return result;
}

int main()
{
	int d;
	cout << "Podaj liczbę z przedzialu od 0 do 2 mld: " << endl;
	cin >> d;
    while(d > 2000000000 || d < 0)
        {
            cout << "Ty ale z podanego przedziału a nie" << endl;
            cout << "Podaj liczbe jeszcze raz: " << endl;
            cin >> d;
        }
    if(d < 2000000000 && d > 0)
    {
        cout << "Brawo wprowadzileś liczbę z prawidłowego przedziału" << endl;
        cout << "*oklaski*" << endl;
    }
	
    /*int something = number % iter;

    if(something != 0)
    {
        cout << "reszta z dzielenia jest inna niz 0" << endl;
    }*/

	if(perfect(d))
    {
		cout << "Podana liczba jest doskonała" << endl;
    }
    else
    {
        cout << "Podana liczba nie jest doskonała" << endl;
    }
	return 0;
}