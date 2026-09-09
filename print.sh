#!/bin/bash

# Evita che i pattern senza corrispondenza vengano presi come testo letterale
shopt -s nullglob

# Definizione dei percorsi da scansionare
files=(
    includes/*.php
    config/*.php
    public/assets/css/*.css
    public/assets/js/*.js
    public/index.php
    views/*.php
)

# Reset o creazione del file di destinazione
> /tmp/codice_sito.txt

for f in "${files[@]}"; do
    if [ -f "$f" ]; then
        echo "=== FILE: $f ===" >> /tmp/codice_sito.txt
        cat "$f" >> /tmp/codice_sito.txt
        echo -e "\n" >> /tmp/codice_sito.txt
    fi
done

echo "Codice esportato con successo in /tmp/codice_sito.txt!"
