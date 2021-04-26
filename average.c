#include<stdio.h>
int main()
{
	int ranks[10], i , n , sum = 0, average; 
	printf("Enter the number of element");
	scanf("%d",&n);
	
	for(i = 0; i<n; ++i)
	{
		printf("%d Enter number: ", i+1);
		scanf("%d", &ranks[i]);
		sum += ranks[i];
	}
	average = sum / n;
	printf("Average = %d", average);
	return 0;
}