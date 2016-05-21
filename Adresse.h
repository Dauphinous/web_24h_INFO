#ifndef ADRESSE_H
#define ADRESSE_H
#include <string>
class Adresse
{
private:
    int m_houseNumber;
    std::string m_postCode;
    std::string m_province;
    std::string m_street;
    std::string m_suburb;
    std::string m_city;
public:
    Adresse();
    void setHouseNumber(int HN);
    void setPostCode(std::string PostCode);
    void setProvince(std::string province);
    void setStreet(std::string street);
    void setSuburb(std::string suburb);
    void setCity(std::string city);
};

#endif // ADRESSE_H
