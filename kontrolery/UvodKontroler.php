<?php class UvodKontroler extends Kontroler
{
    public function zpracuj($parametry)
    {
        // Hlavička stránky
        $this->hlavicka['titulek'] = 'Moon Sky Overlay';
        $this->hlavicka['popis'] = 'Domovská stránka';
        $this->hlavicka['klicova_slova'] = 'web, prihlašení, hry, zábava';
        // Nastavení šablony
        $this->pohled = 'uvod';
    }
}
