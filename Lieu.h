#ifndef LIEU_H
#define LIEU_H
#include <string>
#include <Adresse.h>
enum TypeLieu{RESTAURANT,BAR,NIGHTCLUB};

class Lieu
{
protected:
    int m_id;
    double m_latitude;
    double m_longitude;
    TypeLieu m_type;
    std::string m_name;
    std::string m_numberPhone;
    std::string m_website;
    std::string m_cuisine;
    std::string m_opening_hours;
    Adresse m_adress;
public:
    Lieu();
    void setID(int id);
    void setLatitude(double lat);
    void setLongitude(double lon);
    void setTypeLieu(TypeLieu type);
    void setName(std::string name);
    void setNumberPhone(std::string phone);
    void setWebsite(std::string website);
    void setTypeCuisine(std::string cuisine);
    void setOpeningHour(std::string OpH);
    void setAdresse(Adresse adress);
};

#endif // LIEU_H
