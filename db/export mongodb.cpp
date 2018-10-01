#include <iostream>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main () {

		system("mongoexport --db jaiya --collection province --out province.json");
		system("mongoexport --db jaiya --collection district --out district.json");
		system("mongoexport --db jaiya --collection hospital --out hospital.json");
		system("mongoexport --db jaiya --collection machine --out machine.json");
		system("mongoexport --db jaiya --collection subdistrict --out subdistrict.json");
		system("mongoexport --db jaiya --collection user --out user.json");
		system("mongoexport --db jaiya --collection userData --out userData.json");
		system("mongoexport --db jaiya --collection timetogetpillow --out timetogetpillow.json");
	

   return(0);
} 
