PGDMP         4                z           GinderDB    14.2    14.2     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16412    GinderDB    DATABASE     g   CREATE DATABASE "GinderDB" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_Canada.1252';
    DROP DATABASE "GinderDB";
                postgres    false            �            1259    16413    profile    TABLE     �   CREATE TABLE public.profile (
    firstname character varying,
    lastname character varying,
    email character varying,
    gender character varying,
    gamertag character varying,
    console character varying,
    skill integer
);
    DROP TABLE public.profile;
       public         heap    postgres    false            �          0    16413    profile 
   TABLE DATA           _   COPY public.profile (firstname, lastname, email, gender, gamertag, console, skill) FROM stdin;
    public          postgres    false    209   �       �   �   x���MO�0��Ώ��
�{�4���.�v��&���j�~N?(�,���C��1�C��8��4��ж����qǑ�YC�D���]5E��D�8d&2�w�&����A�{odk�I�����S�4v���?��LuT)8���zf]�넀b6Ηu&x�zKEL2(�R��w�R/�A!|��s,���2�!\WNDQ�0�����0���� �q/�x �T�c�d�d����up��?�
]z�\(�nʖ�0     