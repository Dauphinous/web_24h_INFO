TEMPLATE = app
CONFIG += console c++11
CONFIG -= app_bundle
CONFIG -= qt

SOURCES += main.cpp \
    Lieu.cpp \
    Adresse.cpp

QMAKE_CXXFLAGS += -std=c++11 -Wall -Wextra

HEADERS += \
    Lieu.h \
    Adresse.h

OTHER_FILES += \
    osm-montreal-rest.xml
