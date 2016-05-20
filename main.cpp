#include <iostream>
#include <sstream>
#include <fstream>
#include <vector>
#include "Lieu.h"
using namespace std;

void lectureFichierXML(string nameFiles)
{
    vector<Lieu> m_lieux;
    fstream f;
    f.open(nameFiles,ios::in);
    if(f.is_open())
    {
        while(!f.eof())
        {
            getline(f,line," ");
            if(line == "<node")
            {
                Lieu lieu;
                switch()
            }
        }
    }
    else
    {
        cerr << "Problème dans la lecture du fichier suivant : " << nameFiles << endl;
    }
}

int main(int argc, char** argv)
{
    if(argc <= 1)
    {
        cout << "ERREUR : Pas de fichier spécifié." << endl;
        cout << "Utilisation : ./scriptRBD <XML file>" << endl;
    }
        //Lecture du fichier
        //Sauvegarde dans variables
        //Creation de requete sql
        //Ecriture dans un fichier .sql
    cout << "Hello World" << endl;
    exit(EXIT_SUCCESS);
}
