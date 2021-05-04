#include<stdio.h>
struct person
{
	int Age;
	float Weight;
};

int main()
{
	struct person *personPtr, person1;
personPtr = &person1;

printf("Enter Age: ");
scanf("%d", &personPtr -> Age);

printf("Enter Weight: ");
scanf("%f", &personPtr -> Weight);

printf("Displaying: \n");
printf("Age: %d\n", personPtr -> Age);
printf("Weight: %f", personPtr -> Weight);

return 0;
}