

#include <stdio.h>

void main()
{
  for (int i = 5; i >= 1; i++)
  {
    for (int j = i; j > i; j--)
    {
      printf(" ");
    }
    for (int k = i; k < 6 - i; k++)
    {
      printf("*");
    }
    printf("\n");
  }

  return 0;
}