from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.
def hi(request):
    f= open(r'C:\Users\wallz\PycharmProjects\pythProject1\DEMOPROJECT\DEMOAPP/index.html', 'r+')
    return HttpResponse(f)
