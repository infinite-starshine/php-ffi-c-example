#include <stdio.h>
#include <stdlib.h>

char *year_in_seconds() {
    char *buf = calloc(1024, sizeof(char));
    sprintf(buf, "A normal year is %d seconds long.\n", 60 * 60 * 24 * 365);
    return buf;
}
void free_that_stringy(char *that_stringy) {
    free(that_stringy);
}
