#include <iostream>
using namespace std;

int main()
{
    srand (time(NULL));


    int a = rand();
    cout << "Zgadnij liczbe o ktorej pomyslalem" << endl;
    cout << "Przedzial to od 1 do 50" << endl;
    while(answer != a)
    {
        if(answer > a)
        {
            cout << "Liczba ktora podales jest wieksza od tej o ktorej pomyslalem" << endl;
        }
        if(answer < a)
        {
            cout << "Liczba ktora podales jest wieksza od tej o ktorej pomyslalem" << endl;
        }
        cin >> a;
    }
    cout << "Brawo, zgadles :D" << endl;

}