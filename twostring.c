#include<stdio.h>
int main()
{
	char s1[] =  "Wear " , s2[] = "Mask";
	int lenght, a;
	lenght = 0;
	while(s1[lenght] != '\0')
	{
		++lenght;
	}
	for(a = 0; s2[a] != '\0'; ++a , ++lenght)
	{
		s1[lenght] = s2[a];
    }
    s1[lenght] = '\0'; 

    printf("After add: ");
    puts(s1);

    return 0;
}