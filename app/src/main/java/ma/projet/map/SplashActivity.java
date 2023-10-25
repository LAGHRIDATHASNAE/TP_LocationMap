package ma.projet.map;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;
import android.widget.ImageView;

public class SplashActivity extends AppCompatActivity {
    ImageView image;
    Handler handler;

        @Override
        protected void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_splash);
            handler = new Handler();
            handler.postDelayed(new Runnable() {
                @Override
                public void run() {

                    Intent intent = new Intent(SplashActivity.this, AddPositionActivity.class);
                    startActivity(intent);
                    SplashActivity.this.finish();


                }
            },5000);

        }
    }
