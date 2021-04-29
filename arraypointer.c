#include<stdio.h>
int main()
{
	int data[5];

	printf("Enter elements: ");
	for(int i = 0; i<5; ++i)
		scanf("%d", data+1);

	printf("You Entered: \n");
	for(int i=0 ; i<5 ; ++i)
		printf("%d\n", *(data+i));

    return 0;
}
